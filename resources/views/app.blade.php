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
                    <span class="price variant-price">$225.00</span>
                    <button id="showPopup">Buy</button>
                </div>
                <div class="product-image">
                    <div class="main-image">
                        <img id="bigImage" src="./images/sunglasses_1.png">
                    </div>
                    <div class="main-round">
                    </div>
                    <div class="variants">
                        <div class="variant active"
                             data-name="Z-I 02"
                             data-price="$225.00"
                             data-description="Z-I 02 sunglasses features a sleek black upper frame paired with gold detailing, these square-shaped stunners radiate vintage-inspired sophistication. Perfect for those who dare to stand out with effortless class.">
                            <div class="line"></div>
                            <img class="smallImage" src="./images/sunglasses_1.png" alt="Z-I 02">
                            <span>Z-I 02</span>
                        </div>
                        <div class="variant"
                             data-name="Z-R 98"
                             data-price="$189.00"
                             data-description="Elevate your style with the Z-R98 sunglasses—sleek black frames paired with bold geometric accents for a contemporary twist. Perfectly blending modern flair with everyday comfort, these shades are your ultimate companion for sun-soaked adventures.">
                            <div class="line"></div>
                            <img class="smallImage" src="./images/sunglasses_2.png" alt="Z-R 98">
                            <span>Z-R 98</span>
                        </div>
                        <div class="variant"
                             data-name="Z-S 03"
                             data-price="$198.00"
                             data-description="Step into timeless sophistication with the Z-S 03 sunglasses. Featuring a luxurious gold frame and warm amber lenses, these retro-inspired shades exude effortless charm and refined elegance. A must-have for the modern trendsetter.">
                            <div class="line"></div>
                            <img class="smallImage" src="./images/sunglasses_3.png" alt="Z-S 03">
                            <span>Z-S 03</span>
                        </div>
                        <div class="variant"
                             data-name="Z-H 00"
                             data-price="$245.00"
                             data-description="Unleash modern elegance with these ultra-sleek Z sunglasses. Featuring a minimalist rimless design, bold gold accents, and refined rectangular lenses, they are the epitome of understated luxury. Perfect for those who value sophistication in simplicity.">
                            <div class="line"></div>
                            <img class="smallImage" src="./images/sunglasses_4.png" alt="Z-H 00">
                            <span>Z-H 00</span>
                        </div>
                        <div class="variant"
                             data-name="Z-I 02"
                             data-price="$225.00"
                             data-description="Z-I 02 sunglasses. features a sleek black upper frame paired with gold detailing, these square-shaped stunners radiate vintage-inspired sophistication. Perfect for those who dare to stand out with effortless class.">
                            <div class="line"></div>
                            <img class="smallImage" src="./images/sunglasses_1.png" alt="Z-I 02">
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
                    <span>Address: Everett, WA</span>
                    <span><a href="tel:+12063275800">Phone: +1 (206) 327-5800</a></span>
                    <span><a href="mailto:fkpopal@gmail.com">Email: fkpopal@gmail.com</a></span>
                </div>
            </div>
        </footer>

    <script>
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
                addressSpan.textContent = 'Address: Everett, WA';
                popup.appendChild(addressSpan);
                popup.appendChild(document.createElement('br'));

                const phoneSpan = document.createElement('span');
                const phoneLink = document.createElement('a');
                phoneLink.href = 'tel:+12063275800';
                phoneLink.textContent = 'Phone: +1 (206) 327-5800';
                phoneSpan.appendChild(phoneLink);
                popup.appendChild(phoneSpan);
                popup.appendChild(document.createElement('br'));

                const emailSpan = document.createElement('span');
                const emailLink = document.createElement('a');
                emailLink.href = 'mailto:fkpopal@gmail.com';
                emailLink.textContent = 'Email: fkpopal@gmail.com';
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

            variants.forEach(variant => {
                const image = variant.querySelector('img');
                variant.addEventListener('mouseover', function() {
                    bigImage.src = image.src;
                    document.querySelector('.variant-name').innerHTML = variant.getAttribute('data-name')
                    document.querySelector('.variant-description').innerHTML = variant.getAttribute('data-description')
                    document.querySelector('.variant-price').innerHTML = variant.getAttribute('data-price')
                });

                variant.addEventListener('mouseout', function() {
                    bigImage.src = tempSrc;
                    document.querySelector('.variant-name').innerHTML = tempName
                    document.querySelector('.variant-description').innerHTML = tempDescription
                    document.querySelector('.variant-price').innerHTML = tempPrice
                });
            });

            variants.forEach(variant => {
                const image = variant.querySelector('img')
                variant.addEventListener('click', function() {
                    variants.forEach(variant => variant.classList.remove('active'));
                    document.querySelector('.variant-name').innerHTML = variant.getAttribute('data-name')
                    document.querySelector('.variant-description').innerHTML = variant.getAttribute('data-description')
                    document.querySelector('.variant-price').innerHTML = variant.getAttribute('data-price')
                    variant.classList.add('active');
                    tempSrc = image.src;
                    tempName = variant.getAttribute('data-name')
                    tempDescription = variant.getAttribute('data-description')
                    tempPrice = variant.getAttribute('data-price')
                    bigImage.src = tempSrc;
                });
            });
        }, 1000)

        function updateVh() {
            const vh = window.innerHeight * 0.01;
            document.documentElement.style.setProperty('--vh', `${vh}px`);
        }

        window.addEventListener('resize', updateVh);
        updateVh();
    </script>



@endsection

