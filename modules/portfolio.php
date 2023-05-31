<style>
    * {
        box-sizing: border-box;
    }

    .grid {
        background: #333;
    }

    .grid:after {
        content: '';
        display: block;
        clear: both;
    }

    .grid-sizer,
    .grid-item {
        width: 33.33%;
    }

    .grid-item {
        float: left;
    }

    .grid-item:hover {
        cursor: pointer;
    }

    .grid-item img {
        display: block;
        max-width: 100%;
        border: 10px solid white;
    }

    @media screen and (max-width: 414px) {
        .grid-item img {
            border: 5px solid white;
        }
    }

    .grid-item.grid-item__expanded {
        width: 66.66%;
        z-index: 2;
    }
</style>

<section class="hero is-light is-medium">
    <!-- <div class="hero-body">
        <div class="container">
            <h1 class="title">Testing Masonry - Cascading grid layout library</h1>
            <h2 class="subtitle"> <a href="https://www.instagram.com/dan10gc/?hl=en">Images by Daniel Gonzalez</a></h2>
        </div>
    </div> -->
    <div class="hero-foot" style="margin-top: 4rem;">
        <nav class="tabs is-boxed is-fullwidth">
            <div class="container">
                <ul id="buttonGroup">
                    <li class="is-active"><a id="all">Todas</a></li>
                    <li><a id="bodas">Bodas </a></li>
                    <li><a id="xv">XV Años</a></li>
                    <li><a id="embarazos">Embarazos</a></li>
                    <!-- <li><a id="familiares">Familiares</a></li> -->
                    <!-- <li><a id="playa">Playa</a></li> -->
                </ul>
            </div>
        </nav>
    </div>
    <div class="grid" id="container">
        <div class="grid-sizer"></div>
        <div class="grid-item bodas"><img src="/assets/images/banner/01.jpg" alt="" /></div>
        <div class="grid-item embarazos"><img src="/assets/images/banner/11.jpg" /></div>
        <div class="grid-item bodas"><img src="/assets/images/banner/03.jpg" /></div>
        <div class="grid-item xv"><img src="/assets/images/banner/14.jpg" /></div>
        <div class="grid-item familiares"><img src="/assets/images/banner/22.jpg" /></div>
        <div class="grid-item xv"><img src="/assets/images/banner/07.jpg" /></div>
        <div class="grid-item familiares"><img src="/assets/images/banner/15.jpg" /></div>
        <div class="grid-item bodas"><img src="/assets/images/banner/05.jpg" /></div>
        <div class="grid-item familiares"><img src="/assets/images/banner/23.jpg" alt="" /></div>
        <div class="grid-item embarazos"><img src="/assets/images/banner/12.jpg" /></div>
        <div class="grid-item xv"><img src="/assets/images/banner/10.jpg" /></div>
        <div class="grid-item familiares"><img src="/assets/images/banner/24.jpg" /></div>
        <div class="grid-item bodas"><img src="/assets/images/banner/04.jpg" /></div>
        <div class="grid-item xv"><img src="/assets/images/banner/08.jpg" /></div>
        <div class="grid-item familiares"><img src="/assets/images/banner/17.jpg" /></div>
        <div class="grid-item bodas"><img src="/assets/images/banner/06.jpg" /></div>
        <div class="grid-item familiares"><img src="/assets/images/banner/21.jpg" /></div>
        <div class="grid-item bodas"><img src="/assets/images/banner/02.jpg" alt="" /></div>
        <div class="grid-item familiares"><img src="/assets/images/banner/19.jpg" /></div>
        <div class="grid-item xv"><img src="/assets/images/banner/13.jpg" /></div>
        <div class="grid-item familiares"><img src="/assets/images/banner/16.jpg" /></div>
        <div class="grid-item xv"><img src="/assets/images/banner/09.jpg" /></div>
        <div class="grid-item familiares"><img src="/assets/images/banner/20.jpg" /></div>
        <div class="grid-item xv"><img src="/assets/images/banner/18.jpg" /></div>
    </div>
</section>


