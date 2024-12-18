@extends('layouts.main')

@section('content')

        <header>
            <div class="logo">
                <img class="variant-image" src="./images/zivon.png" alt="Zivon">
            </div>
        </header>
        <main>
            <section class="product">
                <div class="product-info">
                    <h2 class="variant-name">Z-I 02</h2>
                    <p class="variant-description">Z-I 02 sunglasses features a sleek black upper frame paired with gold detailing, these square-shaped stunners radiate vintage-inspired sophistication. Perfect for those who dare to stand out with effortless class.</p>
                    <div class="price-wrapper">
                        <span class="price old-price variant-old-price">$325.00</span>
                        <span class="price new-price variant-price">$225.00</span>
                    </div>
                    <button id="showPopup">Buy</button>
                </div>
                <div class="product-image">
                    <div class="slider">
                        <div class="main-image">
                            <div class="arrow left-arrow">
                                <
                            </div>
                            <img id="bigImage" src="./images/sunglasses_1_1.png">
                            <div class="arrow right-arrow">
                               >
                            </div>
                        </div>
                    </div>
                    <div class="main-round">
                    </div>
                    <div class="variants">
                        <div class="variant active"
                             data-name="Z-I 02"
                             data-price="$225.00"
                             data-old-price="$325.00"
                             data-description="Z-I 02 sunglasses features a sleek black upper frame paired with gold detailing, these square-shaped stunners radiate vintage-inspired sophistication. Perfect for those who dare to stand out with effortless class.">
                            <div class="line"></div>
                            <img class="smallImage" src="./images/sunglasses_1_1.png" alt="Z-I 02">
                            <span>Z-I 02</span>
                        </div>
                        <div class="variant"
                             data-name="Z-R 98"
                             data-price="$189.00"
                             data-old-price="$289.00"
                             data-description="Elevate your style with the Z-R98 sunglasses—sleek black frames paired with bold geometric accents for a contemporary twist. Perfectly blending modern flair with everyday comfort, these shades are your ultimate companion for sun-soaked adventures.">
                            <div class="line"></div>
                            <img class="smallImage" src="./images/sunglasses_2_1.png" alt="Z-R 98">
                            <span>Z-R 98</span>
                        </div>
                        <div class="variant"
                             data-name="Z-S 03"
                             data-price="$198.00"
                             data-old-price="$298.00"
                             data-description="Step into timeless sophistication with the Z-S 03 sunglasses. Featuring a luxurious gold frame and warm amber lenses, these retro-inspired shades exude effortless charm and refined elegance. A must-have for the modern trendsetter.">
                            <div class="line"></div>
                            <img class="smallImage" src="./images/sunglasses_3_1.png" alt="Z-S 03">
                            <span>Z-S 03</span>
                        </div>
                        <div class="variant"
                             data-name="Z-H 00"
                             data-price="$245.00"
                             data-old-price="$345.00"
                             data-description="Unleash modern elegance with these ultra-sleek Z sunglasses. Featuring a minimalist rimless design, bold gold accents, and refined rectangular lenses, they are the epitome of understated luxury. Perfect for those who value sophistication in simplicity.">
                            <div class="line"></div>
                            <img class="smallImage" src="./images/sunglasses_4_1.png" alt="Z-H 00">
                            <span>Z-H 00</span>
                        </div>
                        <div class="variant"
                             data-name="Z-I 02"
                             data-price="$225.00"
                             data-old-price="$325.00"
                             data-description="Z-I 02 sunglasses. features a sleek black upper frame paired with gold detailing, these square-shaped stunners radiate vintage-inspired sophistication. Perfect for those who dare to stand out with effortless class.">
                            <div class="line"></div>
                            <img class="smallImage" src="./images/sunglasses_1_1.png" alt="Z-I 02">
                            <span>Z-I 02</span>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer>
            <div class="footer-first-line">
                <div class="logo">
                    <img src="./images/zivon.png" alt="Zivon">
                </div>
                <div class="info">
                    <span>Seattle, WA, USA</span>
                    <span><a href="tel:+12063275800">+1 (206) 327-5800</a></span>
                    <span><a href="mailto:fkpopal@gmail.com">fkpopal@gmail.com</a></span>
                </div>
            </div>
        </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const elements = document.querySelectorAll('.variant');
            const totalElements = elements.length;
            const interval = 400;
            let index = 0;
            let direction = 1;
            let iterations = 10;
            const bigImage = document.getElementById('bigImage');

            function updateActiveClass(index) {
                elements.forEach(el => el.classList.remove('active'));
                elements[index].classList.add('active');
                const image = elements[index].querySelector('img')
                document.querySelector('.variant-name').innerHTML = elements[index].getAttribute('data-name')
                document.querySelector('.variant-description').innerHTML = elements[index].getAttribute('data-description')
                document.querySelector('.variant-price').innerHTML = elements[index].getAttribute('data-price')
                document.querySelector('.variant-old-price').innerHTML = elements[index].getAttribute('data-old-price')
                bigImage.src = image.src
            }

            function startAnimation() {
                const intervalId = setInterval(() => {
                    updateActiveClass(index);
                    iterations--;

                    index += direction;

                    if (index === totalElements - 1 || index === 0) {
                        direction *= -1;
                    }

                    if (iterations === 1) {
                        clearInterval(intervalId);
                    }
                }, interval);
            }

            startAnimation();
        })

        setTimeout(function () {
            const showPopupButton = document.getElementById('showPopup');

            showPopupButton.addEventListener('click', function() {
                const overlay = document.createElement('div');
                overlay.style.position = 'fixed';
                overlay.style.top = 0;
                overlay.style.left = 0;
                overlay.style.width = '100%';
                overlay.style.height = '100%';
                overlay.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
                overlay.style.zIndex = 999;
                overlay.style.display = 'none';

                const popup = document.createElement('div');
                popup.style.position = 'fixed';
                popup.style.top = '50%';
                popup.style.left = '50%';
                popup.style.transform = 'translate(-50%, -50%)';
                popup.style.padding = '20px';
                popup.style.backgroundColor = '#fff';
                popup.style.border = '1px solid #ccc';
                popup.style.boxShadow = '0 0 10px rgba(0, 0, 0, 0.1)';
                popup.style.zIndex = 1000;
                popup.style.display = 'none';

                const heading = document.createElement('h2');
                heading.textContent = 'Contact Information';
                heading.style.fontWeight = 'bold';
                popup.appendChild(heading);

                const addressSpan = document.createElement('span');
                addressSpan.textContent = 'Seattle, WA, USA';
                popup.appendChild(addressSpan);
                popup.appendChild(document.createElement('br'));

                const phoneSpan = document.createElement('span');
                const phoneLink = document.createElement('a');
                phoneLink.href = 'tel:+12063275800';
                phoneLink.textContent = '+1 (206) 327-5800';
                phoneSpan.appendChild(phoneLink);
                popup.appendChild(phoneSpan);
                popup.appendChild(document.createElement('br'));

                const emailSpan = document.createElement('span');
                const emailLink = document.createElement('a');
                emailLink.href = 'mailto:fkpopal@gmail.com';
                emailLink.textContent = 'fkpopal@gmail.com';
                emailSpan.appendChild(emailLink);
                popup.appendChild(emailSpan);
                popup.appendChild(document.createElement('br'));

                const closeBtn = document.createElement('button');
                closeBtn.textContent = 'Close';
                closeBtn.style.padding = '5px 10px';
                closeBtn.style.fontSize = '14px';
                closeBtn.style.cursor = 'pointer';
                closeBtn.style.backgroundColor = '#c5bba3';
                closeBtn.style.color = 'white';
                closeBtn.style.border = 'none';
                closeBtn.style.borderRadius = '5px';
                closeBtn.style.marginTop = '20px';
                closeBtn.style.marginLeft = '320px';
                closeBtn.style.padding = '10px';
                popup.appendChild(closeBtn);

                document.body.appendChild(overlay);
                document.body.appendChild(popup);

                overlay.style.display = 'block';
                popup.style.display = 'block';

                closeBtn.addEventListener('click', function() {
                    overlay.style.display = 'none';
                    popup.style.display = 'none';
                    document.body.removeChild(overlay);
                    document.body.removeChild(popup);
                });

                overlay.addEventListener('click', function() {
                    overlay.style.display = 'none';
                    popup.style.display = 'none';
                    document.body.removeChild(overlay);
                    document.body.removeChild(popup);
                });
            });
        }, 1000)

        setTimeout(function () {
            const variants = document.querySelectorAll('.variant');
            const bigImage = document.getElementById('bigImage');
            let tempSrc = bigImage.src;
            let tempName =document.querySelector('.variant-name').innerHTML;
            let tempDescription = document.querySelector('.variant-description').innerHTML;
            let tempPrice = document.querySelector('.variant-price').innerHTML;
            let tempOldPrice = document.querySelector('.variant-old-price').innerHTML;

            /*variants.forEach(variant => {
                const image = variant.querySelector('img');
                variant.addEventListener('mouseover', function() {
                    bigImage.src = image.src;
                    document.querySelector('.variant-name').innerHTML = variant.getAttribute('data-name')
                    document.querySelector('.variant-description').innerHTML = variant.getAttribute('data-description')
                    document.querySelector('.variant-price').innerHTML = variant.getAttribute('data-price')
                    document.querySelector('.variant-old-price').innerHTML = variant.getAttribute('data-old-price')
                });

                variant.addEventListener('mouseout', function() {
                    bigImage.src = tempSrc;
                    document.querySelector('.variant-name').innerHTML = tempName
                    document.querySelector('.variant-description').innerHTML = tempDescription
                    document.querySelector('.variant-price').innerHTML = tempPrice
                    document.querySelector('.variant-old-price').innerHTML = tempOldPrice
                });
            });*/

            variants.forEach(variant => {
                const image = variant.querySelector('img')
                variant.addEventListener('click', function() {
                    variants.forEach(variant => variant.classList.remove('active'));
                    document.querySelector('.variant-name').innerHTML = variant.getAttribute('data-name')
                    document.querySelector('.variant-description').innerHTML = variant.getAttribute('data-description')
                    document.querySelector('.variant-price').innerHTML = variant.getAttribute('data-price')
                    document.querySelector('.variant-old-price').innerHTML = variant.getAttribute('data-old-price')
                    variant.classList.add('active');
                    tempSrc = image.src;
                    tempName = variant.getAttribute('data-name')
                    tempDescription = variant.getAttribute('data-description')
                    tempPrice = variant.getAttribute('data-price')
                    tempOldPrice = variant.getAttribute('data-old-price')
                    bigImage.src = tempSrc;
                });
            });

            const maxImages = 3;

            const getCurrentIndices = () => {
                const src = bigImage.src;
                const match = src.match(/_(\d+)_(\d+)\.png$/);
                if (match) {
                    return {
                        groupIndex: parseInt(match[1], 10),
                        imageIndex: parseInt(match[2], 10),
                    };
                }
                return { groupIndex: 1, imageIndex: 1 };
            };

            const updateImage = (newImageIndex) => {
                bigImage.src = bigImage.src.replace(/_(\d+)_(\d+)\.png$/, (match, groupIndex) => {
                    return `_${groupIndex}_${newImageIndex}.png`;
                });
            };

            // Handle left arrow click
            document.querySelector('.left-arrow').addEventListener('click', () => {
                const { groupIndex, imageIndex } = getCurrentIndices();
                const newImageIndex = imageIndex === 1 ? maxImages : imageIndex - 1;
                updateImage(newImageIndex);
            });

            // Handle right arrow click
            document.querySelector('.right-arrow').addEventListener('click', () => {
                const { groupIndex, imageIndex } = getCurrentIndices();
                const newImageIndex = imageIndex === maxImages ? 1 : imageIndex + 1;
                updateImage(newImageIndex);
            });
        }, 1000)
    </script>



@endsection

