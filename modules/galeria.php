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
    <div class="hero-body">
        <div class="container">
            <h1 class="title">Testing Masonry - Cascading grid layout library</h1>
            <h2 class="subtitle"> <a href="https://www.instagram.com/dan10gc/?hl=en">Images by Daniel Gonzalez</a></h2>
        </div>
    </div>
    <div class="hero-foot">
        <nav class="tabs is-boxed is-fullwidth">
            <div class="container">
                <ul id="buttonGroup">
                    <li class="is-active"><a id="all">All Images</a></li>
                    <li><a id="newYork">New York City </a></li>
                    <li><a id="flowers">Flowers</a></li>
                    <li><a id="others">Other</a></li>
                    <li><a id="embarazadas">Embarazadas</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="grid" id="container">
        <div class="grid-sizer"></div>
        <div class="grid-item flowers"><img src="/assets/images/banner/07.jpg" /></div>
        <div class="grid-item flowers"><img src="/assets/images/banner/08.jpg" /></div>
        <div class="grid-item newYork"><img src="/assets/images/banner/02.jpg" /></div>
        <div class="grid-item newYork"><img src="/assets/images/banner/05.jpg" /></div>
        <div class="grid-item flowers"><img src="/assets/images/banner/09.jpg" /></div>
        <div class="grid-item newYork"><img src="/assets/images/banner/06.jpg" /></div>
        <div class="grid-item newYork"><img src="/assets/images/banner/02.jpg" /></div>
        <div class="grid-item newYork"><img src="/assets/images/banner/03.jpg" /></div>
        <div class="grid-item flowers"><img src="/assets/images/banner/10.jpg" /></div>
        <div class="grid-item others"><img src="/assets/images/banner/20.jpg" /></div>
        <div class="grid-item flowers"><img src="/assets/images/banner/13.jpg" /></div>
        <div class="grid-item flowers"><img src="/assets/images/banner/18.jpg" /></div>
        <div class="grid-item newYork"><img src="/assets/images/banner/06.jpg" /></div>
        <div class="grid-item flowers"><img src="/assets/images/banner/14.jpg" /></div>
        <div class="grid-item others"><img src="/assets/images/banner/19.jpg" /></div>
        <div class="grid-item newYork"><img src="/assets/images/banner/01.jpg" /></div>
        <div class="grid-item others"><img src="/assets/images/banner/23.jpg" /></div>
        <div class="grid-item others"><img src="/assets/images/banner/24.jpg" /></div>
        <div class="grid-item newYork"><img src="/assets/images/banner/04.jpg" /></div>
        <div class="grid-item embarazadas"><img src="/assets/images/banner/11.jpg" /></div>
        <div class="grid-item embarazadas"><img src="/assets/images/banner/12.jpg" /></div>
    </div>
</section>

<script>
var grid = document.querySelector('.grid');
var msnry;
// element selectors
var imgAll = document.querySelectorAll('.grid-item');
var imgNy = document.querySelectorAll('.newYork');
var imgFlowers = document.querySelectorAll('.flowers');
var imgOthers = document.querySelectorAll('.others');
var imgEmbarazadas = document.querySelectorAll('.embarazadas');
// buttons
const tabsUl = document.getElementById('buttonGroup');
const lis = tabsUl.children;
const gridItems = grid.children;


imagesLoaded(grid, function() {
    msnry = new Masonry(grid, {
        //options
        itemSelector: '.grid-item',
        columnWidth: '.grid-sizer',
        percentPosition: true
    });
});

//element & class name
function toggleClass(parentElem, childElems, className) {
    for (let i = 0; i < childElems.length; i++) {
        if (childElems[i] == parentElem) {
            childElems[i].classList.add(className);
        } else {
            childElems[i].classList.remove(className);
        }
    }
}

function showImages(showImg, hideImg1, hideImg2,hideImg3) {
    for (let i = 0; i < showImg.length; i++) {
        showImg[i].style.display = "block";
    }
    for (let i = 0; i < hideImg1.length; i++) {
        hideImg1[i].style.display = "none";
    }
    for (let i = 0; i < hideImg2.length; i++) {
        hideImg2[i].style.display = "none";
    }
    for (let i = 0; i < hideImg3.length; i++) {
        hideImg3[i].style.display = "none";
    }
}


tabsUl.addEventListener('click', (event) => {
    let tabLi = event.target.parentNode;

    toggleClass(tabLi, lis, 'is-active');

    //show all images
    if (event.target.id == "all") {
        for (let i = 0; i < imgAll.length; i++) {
            imgAll[i].style.display = "block";
        }
    }

    //show ny images
    if (event.target.id == "newYork") {
        showImages(imgNy, imgFlowers, imgOthers, imgEmbarazadas);
    }

    // show flowers
    if (event.target.id == "flowers") {
        showImages(imgFlowers, imgNy, imgOthers, imgEmbarazadas);
    }

    // show other images
    if (event.target.id == "others") {
        showImages(imgOthers, imgFlowers, imgNy, imgEmbarazadas);
    }
    // show other images
    if (event.target.id == "embarazadas") {
        showImages(imgEmbarazadas, imgFlowers, imgNy, imgOthers);
    }

    msnry.layout();

});

grid.addEventListener('click', function(event) {
    let imgContainer = event.target.parentNode;
    toggleClass(imgContainer, gridItems, 'grid-item__expanded');
    msnry.layout();
});
</script>