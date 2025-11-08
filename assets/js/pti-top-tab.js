
// pti-top-tab.js (patched v3.1) - visibility-driven init + See More/Less priority + id/class support
(function () {
    document.addEventListener("DOMContentLoaded", function () {
        if (typeof lucide !== 'undefined') {
            try { lucide.createIcons(); } catch (e) {}
        }

        function moveGlider(targetTab) {
            if (!targetTab) return;
            const container = targetTab.closest('.la-compact-tabs__container');
            if (!container) return;
            const glider = container.querySelector(".la-compact-tabs__glider");
            if (glider && window.innerWidth > 768) {
                glider.style.width = targetTab.offsetWidth + "px";
                glider.style.left = targetTab.offsetLeft + "px";
            }
        }

        // ---------------------------
        // Constants & scoped counters
        // ---------------------------
        const INITIAL_VISIBLE = 3;
        const INCREMENT = 5;
        let visibleCounts = {};

        function scopeKey(scopeEl, tabId) {
            const isModal = !!(scopeEl.closest && scopeEl.closest('.modal, [role="dialog"], #enquiryBookingModal'));
            const scopeId = scopeEl.getAttribute('data-pti-scope-id') || '';
            return (isModal ? 'modal' : 'main') + '::' + (scopeId || '') + '::' + tabId;
        }

        // ---------------------------
        // Core: show/hide cards
        // ---------------------------
        function updateCardVisibility(reset = false, scope = document) {
            if (!scope) return;
            const activeContent = scope.querySelector('.la-compact-tab-content.active');
            if (!activeContent) return;

            const wrapper = activeContent.querySelector('.la-compact-cards-wrapper');
            if (!wrapper) return;

            const cards = wrapper.querySelectorAll('.la-compact-card');
            const seeMoreBtn = scope.querySelector("#la-compact-see-more-btn") || scope.querySelector(".la-compact-see-more-btn");
            const seeLessBtn = scope.querySelector("#la-compact-see-less-btn") || scope.querySelector(".la-compact-see-less-btn");

            const tabId = activeContent.id || '';
            const key = scopeKey(scope, tabId);

            if (reset || !visibleCounts[key]) {
                visibleCounts[key] = INITIAL_VISIBLE;
            }

            cards.forEach((card, index) => {
                card.style.display = index < visibleCounts[key] ? 'flex' : 'none';
            });

            const allCardsVisible = visibleCounts[key] >= cards.length;
            if (seeMoreBtn) seeMoreBtn.style.display = allCardsVisible ? 'none' : 'flex';
            if (seeLessBtn) seeLessBtn.style.display = visibleCounts[key] > INITIAL_VISIBLE ? 'flex' : 'none';
        }

        // Utility: find scope for any event
        function getScopeForEventTarget(target) {
            let scope = target.closest && target.closest("#course-section-container");
            if (scope) return scope;
            // If inside any modal/dialog, grab the container within that modal
            const modalRoot = target.closest && target.closest('.modal, [role="dialog"], #enquiryBookingModal');
            if (modalRoot) {
                const modalScope = modalRoot.querySelector('#course-section-container');
                if (modalScope) return modalScope;
            }
            // Last resort: if only one container exists, return it
            const lone = document.querySelectorAll('#course-section-container');
            if (lone.length === 1) return lone[0];
            return null;
        }

        // -------------------------------------
        // Unified click handler (SeeMore first)
        // -------------------------------------
        document.body.addEventListener('click', function(event) {
            // See More / See Less (PRIORITY)
            const seeMoreBtn = event.target.closest && event.target.closest('#la-compact-see-more-btn, .la-compact-see-more-btn');
            const seeLessBtn = event.target.closest && event.target.closest('#la-compact-see-less-btn, .la-compact-see-less-btn');
            if (seeMoreBtn || seeLessBtn) {
                const scope = getScopeForEventTarget(event.target);
                if (!scope) return;

                if (seeMoreBtn) {
                    const activeContent = scope.querySelector('.la-compact-tab-content.active');
                    if (activeContent) {
                        const tabId = activeContent.id || '';
                        const key = scopeKey(scope, tabId);
                        if (!visibleCounts[key]) visibleCounts[key] = INITIAL_VISIBLE;
                        visibleCounts[key] += INCREMENT;
                        updateCardVisibility(false, scope);
                    }
                    return;
                }

                if (seeLessBtn) {
                    scope.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    setTimeout(() => updateCardVisibility(true, scope), 300);
                    return;
                }
            }

            // Tab button click
            const tabBtn = event.target.closest && event.target.closest('.la-compact-tab-btn');
            if (tabBtn) {
                const scope = getScopeForEventTarget(tabBtn);
                if (!scope) return;

                scope.querySelectorAll(".la-compact-tab-btn").forEach(t => t.classList.remove("active"));
                tabBtn.classList.add("active");

                scope.querySelectorAll(".la-compact-tab-content").forEach(c => c.classList.remove("active"));
                const targetContent = scope.querySelector('#' + tabBtn.dataset.tab);
                if (targetContent) {
                    targetContent.classList.add("active");
                    updateCardVisibility(true, scope);
                }
                moveGlider(tabBtn);
                return;
            }

            // Intro text switch
            const switchLink = event.target.closest && event.target.closest('.switch-tab-link');
            if (switchLink) {
                event.preventDefault();
                const targetSlug = switchLink.dataset.target;
                const scope = getScopeForEventTarget(switchLink);
                if (targetSlug && scope) {
                    const targetTabButton = scope.querySelector(`.la-compact-tab-btn[data-tab^="${targetSlug}"]`);
                    if (targetTabButton) targetTabButton.click();
                }
                return;
            }
        });

        // -------------------------------
        // Initial setup + visibility watch
        // -------------------------------
        // Assign a unique data scope id to each container to avoid key collision
        (function assignScopeIds() {
            const containers = document.querySelectorAll('#course-section-container');
            let idx = 0;
            containers.forEach(el => {
                if (!el.getAttribute('data-pti-scope-id')) {
                    el.setAttribute('data-pti-scope-id', (++idx).toString());
                }
            });
        })();

        function isShown(el) {
            if (!el) return false;
            const cs = window.getComputedStyle(el);
            const rects = el.getClientRects();
            const inDoc = document.body.contains(el);
            return inDoc && cs.display !== 'none' && rects.length > 0;
        }

        function ensureActiveTab(scope) {
            let activeBtn = scope.querySelector('.la-compact-tab-btn.active') || scope.querySelector('.la-compact-tab-btn');
            if (activeBtn && !activeBtn.classList.contains('active')) {
                scope.querySelectorAll(".la-compact-tab-btn").forEach(t => t.classList.remove("active"));
                activeBtn.classList.add("active");
                scope.querySelectorAll(".la-compact-tab-content").forEach(c => c.classList.remove("active"));
                const target = scope.querySelector('#' + (activeBtn.dataset.tab || ''));
                if (target) target.classList.add("active");
            }
            return activeBtn || null;
        }

        function initScope(scope) {
            const activeBtn = ensureActiveTab(scope);
            updateCardVisibility(true, scope); // reset to 3
            if (activeBtn) moveGlider(activeBtn);
        }

        // Track visibility transitions per container, and init on hidden->shown
        function checkContainersVisibility() {
            document.querySelectorAll('#course-section-container').forEach(scope => {
                const nowShown = isShown(scope);
                const wasShown = scope.getAttribute('data-pti-was-shown') === '1';
                if (nowShown && !wasShown) {
                    initScope(scope);
                    scope.setAttribute('data-pti-was-shown', '1');
                } else if (!nowShown && wasShown) {
                    scope.setAttribute('data-pti-was-shown', '0');
                }
            });
        }

        // Run once at DOM ready
        checkContainersVisibility();

        // Also run on full load (images/fonts may toggle layout)
        window.addEventListener('load', checkContainersVisibility);

        // Mutation observer: attributes/class/style/open/aria-hidden changes anywhere in the DOM
        const mo = new MutationObserver(() => {
            if (window.requestAnimationFrame) {
                requestAnimationFrame(checkContainersVisibility);
            } else {
                setTimeout(checkContainersVisibility, 0);
            }
        });
        mo.observe(document.documentElement || document.body, {
            attributes: true,
            childList: true,
            subtree: true,
            attributeFilter: ['class', 'style', 'open', 'aria-hidden']
        });

        // --------------------------
        // Resize: update all scopes
        // --------------------------
        window.addEventListener('resize', () => {
            document.querySelectorAll('#course-section-container').forEach(scopeEl => {
                if (!isShown(scopeEl)) return; // skip hidden scopes (e.g., closed modal)
                const currentActiveTab = scopeEl.querySelector('.la-compact-tab-btn.active');
                if (currentActiveTab) moveGlider(currentActiveTab);
            });
        });
    });
})();
