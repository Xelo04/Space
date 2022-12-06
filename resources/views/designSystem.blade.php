<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Design System</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/js/script.js">
    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;700&family=Bellefair&family=Barlow:wght@400;700&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1 class="uppercase">Design System</h1>

        <section id="colors">
            <h2 class="numbered-title"><span>01</span> Colors</h2>
            <div class="flex">
                <div style="flex-grow: 1;">
                    <div class="bg-dark text-white ff-serif fs-500"
                        style="padding: 3rem 1rem 1rem; border: 1px solid white">#0B0D17
                    </div>
                    <p><span class="text-accent">RGB</span> 11, 13, 23</p>
                    <p><span class="text-accent">HSL</span> 230°, 35%, 7%</p>
                </div>
                <div style="flex-grow: 1;">
                    <div class="bg-accent text-dark  ff-serif fs-500"
                        style="padding: 3rem 1rem 1rem; border: 1px solid white">#D0D6F9
                    </div>
                    <p><span class="text-accent">RGB</span> 208, 214, 249</p>
                    <p><span class="text-accent">HSL</span> 231°, 77%, 90%</p>
                </div>
                <div style="flex-grow: 1;">
                    <div class="bg-white text-dark  ff-serif fs-500"
                        style="padding: 3rem 1rem 1rem; border: 1px solid white;">#FFFFFF
                    </div>
                    <p><span class="text-accent">RGB</span> 255, 255, 255</p>
                    <p><span class="text-accent">HSL</span> 0°, 0%, 100%</p>
                </div>
            </div>
        </section>
        <section id="typography">
            <h2 class="numbered-title"><span>02</span> Typography</h2>
            <div class="flex">
                <div class="flow" style="flex-basis: 100%">
                    <div>
                        <p class="text-accent">Heading 1 - Bellefair Regular - 150px</p>
                        <p class="fs-900 ff-serif uppercase">Earth</p>
                    </div>
                    <div>
                        <p class="text-accent">Heading 2 - Bellefair Regular - 100px</p>
                        <p class="fs-800 ff-serif uppercase">Venus</p>
                    </div>
                    <div>
                        <p class="text-accent">Heading 3 - Bellefair Regular - 56px</p>
                        <p class="fs-700 ff-serif uppercase">Jupiter & Saturn</p>
                    </div>
                    <div>
                        <p class="text-accent">Heading 4 - Bellefair Regular - 32px</p>
                        <p class="fs-600 ff-serif uppercase">Uranus, Neptune, & Pluto</p>
                    </div>
                    <div>
                        <p class="text-accent">Heading 5 - Barlow Condensed Regular - 28px - 4.75 Character Space</p>
                        <p class="text accent fs-400 ff-sans-cond uppercase letter-spacing-1">So, you want to travel to
                            space</p>
                    </div>

                </div>

                <div class="flow" style="flex-basis: 100%; --flow-space: 4rem;">
                    <div>
                        <p class="text-accent">Subheading 1 - Bellefair Regular - 28px</p>
                        <p class="fs-500 ff-serif uppercase">384,400 km</p>
                    </div>
                    <div>
                        <p class="text-accent">Subheading 2 - Barlow Condensed Regular - 14px - 2.35 Character Space</p>
                        <p class="fs-200 ff-sans-cond letter-spacing-3 uppercase">Avg. Distance</p>
                    </div>
                    <div>
                        <p class="text-accent">Nav Text - Barlow Condensed Regular - 16px - 2.7 Character Space</p>
                        <p class="fs-300 ff-sans-cond letter-spacing-2 uppercase">Europa</p>
                    </div>
                    <div>
                        <p class="text-accent">Body Text</p>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque
                            aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed
                            pretium,
                            ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu
                            nibh. Nullam mollis. Ut justo. Suspendisse potenti.Lorem ipsum dolor sit amet, consectetuer
                            adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque,
                            aliquet
                            vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor
                            libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse
                            potenti.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit.
                            Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel,
                            nisi.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="flow" id="interactive-elements">
            <h2 class="numbered-title"><span>03</span> Interactive elements</h2>

            <!-- navigation -->
            <div>
                <nav>
                    <ul class="primary-navigation underline-indicators flex">
                        <li class="active"><a class="uppercase text-white letter-spacing-2"
                                href="#"><span>00</span> Active</a>
                        <li><a class="uppercase text-white letter-spacing-2" href="#">
                                <span>01</span> Hovered</a>
                        <li><a class="uppercase text-white letter-spacing-2" href="#">
                                <span>02</span> Idle</a>
                    </ul>
                    <span style="margin-left:40%">Different States of Navigation Bar</span>
                </nav>
            </div>
            <div class="flex">
                <div style="margin-top: 3rem; margin: 5rem; min-width:40%; text-align: center">
                    <!-- explore button -->
                    <a href="#" class="large-button uppercase ff-serif fs-600 text-dark bg-white grid">Explore</a>
                    <span style="line-height: 5rem">Landing Page Main Button - Idle</span>
                    <a href="#" class="large-button uppercase ff-serif fs-600 text-dark bg-white grid"
                        style="margin-bottom: 1.5rem">Explore</a>
                    <span>Landing Page Main Button - Hover</span>
                </div>
                <div class="flow" style="margin-bottom: 50vh; --flow-space:4rem;margin-top: 5rem; margin-left:15%">
                    <!-- Tabs -->
                    <div class="tab-list underline-indicators flex">
                        <button aria-selected="true"
                            class="uppercase text-accent bg-dark ff-sans-cond letter-spacing-2">Moon</button>
                        <button aria-selected="false"
                            class="uppercase text-accent bg-dark ff-sans-cond letter-spacing-2">Mars</button>
                        <button aria-selected="false"
                            class="uppercase text-accent bg-dark ff-sans-cond letter-spacing-2">Europa</button>
                    </div>
                    <span class="grid" style="margin-left: 1rem">Tabs (Active, Hover & Idle)</span>
                    <!-- Dots -->
                    <div class="dot-indicators flex" style="margin-left: 5rem; margin-top:10rem">
                        <button aria-selected="true"><span class="sr-only">Slide title</span></button>
                        <button aria-selected="false"><span class="sr-only">Slide title</span></button>
                        <button aria-selected="false"><span class="sr-only">Slide title</span></button>
                    </div>
                    <span class="grid">Slider 1 States (Active, Hover & Idle)</span>
                    <!-- Numbers -->
                    <div class="number-indicators grid" style="margin-left: 6rem; margin-top:10rem">
                        <button aria-selected="true"
                            class="uppercase text-accent bg-dark ff-sans-cond letter-spacing-2">1</button>
                        <button aria-selected="false"
                            class="uppercase text-accent bg-dark ff-sans-cond letter-spacing-2">2</button>
                        <button aria-selected="false"
                            class="uppercase text-accent bg-dark ff-sans-cond letter-spacing-2">3</button>
                    </div>
                    <span class="grid">Slider 2 States (Active, Hover & Idle)</span>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
