
// example images
const posts = [];
const images = [
    '/assets/images/banner/02.jpg',
    '/assets/images/banner/01.jpg',
    '/assets/images/banner/03.jpg'
];
let imageIndex = 0;
for (let i = 1; i <= 12; i++) {
    let item = {
        id: i,
        title: `Post ${i}`,
        image: images[imageIndex],
    };
    posts.push(item);
    imageIndex++;
    if (imageIndex > images.length - 1) imageIndex = 0;
}
