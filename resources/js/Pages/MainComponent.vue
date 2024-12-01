<template>
    <div>
        <h1>{{ title }}</h1>
    </div>
    <main>
        <section class="product">
            <div class="product-info">
                <h2>JULIA G1</h2>
                <p>Introducing JULIA, a perfect blend of modern sophistication and timeless elegance. This model exudes a premium, classy vibe, featuring glossy rose-gold stainless steel with touches of black glossy acetate on the frame.</p>
                <span class="price">$145.00</span>
                <button>Buy Now</button>
            </div>
            <div class="product-image">
                <div class="main-image">
                    <img src="./images/sunglasses_1.png" alt="Julia G1 Sunglasses">
                </div>
                <div class="variants">
                    <div class="line"></div>
                    <div class="variant">
                        <img src="./images/sunglasses_1.png" alt="Explorer V">
                        <span>EXPLORER V</span>
                    </div>
                    <div class="variant">
                        <img src="./images/sunglasses_2.png" alt="Round Metal">
                        <span>ROUND METAL</span>
                    </div>
                    <div class="variant">
                        <img src="./images/sunglasses_3.png" alt="Explorer V">
                        <span>EXPLORER V</span>
                    </div>
                    <div class="variant">
                        <img src="./images/sunglasses_4.png" alt="Round Metal">
                        <span>ROUND METAL</span>
                    </div>
                    <div class="variant">
                        <img src="./images/sunglasses_1.png" alt="Julia G1">
                        <span>JULIA G1</span>
                    </div>
                </div>
            </div>
        </section>
    </main>
</template>

<script>
    export default {
        props: {
            title: String,
        },
    };
</script>

