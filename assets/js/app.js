const container = document.querySelector('.galeria');

function generateMasonryGrid(columns, posts) {
  container.innerHTML = '';

  //Store column arrays that contain relevant posts
  let columnWrappers = {};

  //Create column item array and  add this to column wrapper object
  for (let i = 0; i < columns; i++) {
    columnWrappers[`column${i}`] = [];
  }
  for (let i = 0; i < posts.length; i++) {
    const column = i % columns;
    columnWrappers[`column${column}`].push(posts[i]);
  }
  for (let i = 0; i < columns; i++) {
    let columnPosts = columnWrappers[`column${i}`];
    let column = document.createElement('div');
    column.classList.add('column');
    columnPosts.forEach((post) => {
      let postDiv = document.createElement('div');
      // postDiv.classList.add('gallery-item');// se agrega clase 
      let image = document.createElement('img');
      image.src = post.image;
      let link = document.createElement('a');
      // link.classList.add('popup-gallery');
      // link.href = post.image;
      link.setAttribute('data-mfp-src', post.image);
      link.appendChild(image);
      postDiv.appendChild(link);
      column.appendChild(postDiv);
    });
    container.appendChild(column);
  }
}

let previousScreenSize = innerWidth;
console.log(previousScreenSize);

function adjustMasonryGrid() {
  if (previousScreenSize < 600) {
    generateMasonryGrid(1, posts);
  } else if (previousScreenSize >= 600 && previousScreenSize < 990) {
    generateMasonryGrid(2, posts);
  } else if (previousScreenSize >= 1000 && previousScreenSize < 2050) {
    generateMasonryGrid(4, posts);
  }
}

window.addEventListener('resize', () => {
  const currentScreenWidth = innerWidth;
  if (currentScreenWidth >= 1000 && previousScreenSize < 1000) {
    adjustMasonryGrid();
  }
  else if (currentScreenWidth >= 600 && previousScreenSize < 1000) {
    adjustMasonryGrid();
  }
  else if (currentScreenWidth < 600 && previousScreenSize >= 600) {
    adjustMasonryGrid();
  }
  previousScreenSize = currentScreenWidth;
});

window.addEventListener('load', () => {
  if (previousScreenSize >= 1000) {
    adjustMasonryGrid();
  }
  else if (previousScreenSize >= 600) {
    adjustMasonryGrid();
  }
  else if (previousScreenSize < 600) {
    adjustMasonryGrid();
  }
});

$(document).ready(function() {
	$('.popup-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
			}
		}
	});
});
