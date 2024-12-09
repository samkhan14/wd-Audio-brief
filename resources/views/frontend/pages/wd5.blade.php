@extends('frontend.layouts.master')
@push('customStyles')
@endpush
@section('container')
    <style>
        #horizontal-scrollAreaContainer .horizontal-scrollArea {
            position: sticky;
            top: var(--header-height);
            height: calc(100vh - var(--header-height));
        }

        @media (max-width: 576px) {
            .addOnScrollableArea {
                min-width: calc(300vw + 7rem) !important;
                padding-left: 3.5rem !important;
                padding-right: 3.5rem !important;
            }
        }
    </style>

    <x-wd5-ui />

    @push('customScripts')
        <x-portfolio-popups />

        <script>
            document.addEventListener("DOMContentLoaded", () => {
                const workflowSectionContainer = document.querySelector('#horizontal-scrollAreaContainer');
                const workflowSection = document.querySelector('#horizontal-scrollArea');
                const headerHeight = document.querySelector(".header").offsetHeight;
                const scrollItems = document.querySelectorAll(".horizontal-scrollerItem");
                const itemCount = scrollItems.length;

                const stickHeadingContainer = document.querySelector('.stickHeadingContainer');
                const stickHeading = document.querySelector('.stickHeading');

                gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

                if (workflowSection && workflowSectionContainer) {
                    const clamp = gsap.utils.clamp(-15, 15);
                    let clampMob = (min, max) => value => Math.min(Math.max(value, min), max);

                    const updateStyles = () => {
                        const windowWidth = window.innerWidth;
                        const isMobile = windowWidth < 700;

                        let totalWidth = 0;

                        scrollItems.forEach(item => {
                            totalWidth += item.getBoundingClientRect().width;
                        });

                        const adjustedHeight = totalWidth + window.innerHeight - windowWidth;
                        workflowSection.style.width = `${totalWidth}px`;

                        ScrollTrigger.create({
                            trigger: workflowSectionContainer,
                            start: `top ${headerHeight}px`,
                            end: `+=${totalWidth}`,
                            pin: true,
                            scrub: 5,
                            onUpdate: (self) => {
                                const scrollY = self.progress * (totalWidth - windowWidth);
                                workflowSection.style.transform = `translateX(-${scrollY}px)`;
                            }
                        });

                        loadScroller();

                    };

                    const updateItemStyles = () => {
                        const firstItem = scrollItems[0];
                        const thirdItem = scrollItems[3];
                        const screenMidPoint = window.innerHeight / 1.25;
                        const screenMidWidthPoint = window.innerWidth / 2;

                        if (firstItem.getBoundingClientRect().top <= screenMidPoint) {
                            firstItem.classList.add("animate");
                        }

                        if (firstItem.getBoundingClientRect().top <= (screenMidPoint / 3)) {
                            document.querySelector("#first-confetti").classList.remove("hiddenConfetti");
                        }

                        scrollItems.forEach((item, index) => {
                            if (item.getBoundingClientRect().left <= screenMidWidthPoint) {
                                const counters = item.querySelectorAll(".counter");

                                counters.forEach(counter => {
                                    const targetValue = parseInt(counter.getAttribute("data-value"),
                                        10);
                                    const currentValue = parseInt(counter.innerHTML, 10) || 0;

                                    if (!counter.classList.contains("counting")) {
                                        counter.classList.add("counting");
                                        countUp(counter, currentValue, targetValue);
                                    }
                                });
                            }
                        });

                        thirdItem.querySelectorAll(".singleAddonList").forEach(addon => {
                            if (addon.getBoundingClientRect().x <= (screenMidWidthPoint * 2)) {
                                addon.classList.add("animated");
                            }
                        });

                    };

                    let lastScrollTime = 0;
                    const throttleScroll = (callback, limit) => {
                        return () => {
                            const now = Date.now();
                            if (now - lastScrollTime >= limit) {
                                callback();
                                lastScrollTime = now;
                            }
                        };
                    };

                    window.addEventListener('scroll', throttleScroll(updateItemStyles, 100));
                    window.addEventListener('resize', window.innerWidth < 700 ? () => null : updateStyles);

                    updateStyles();
                }
            });
        </script>
    @endpush
@endsection
