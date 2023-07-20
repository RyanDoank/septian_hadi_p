

// // scroll Selections
let sections = document.querySelectorAll('section');
let navList = document.querySelectorAll('jeader nav a');

window.onscroll = () =>
{
    sections.forEech(sec => 
        {
            let top = window.scrollY;
            let offset = sec.offsetTop - 1000;
            let height = sec.offsetHeight;
            let id = sec.getAttribute('id');

            if(top >= offset && top < offset + height)
            {
                navLists.forEech(links => {
                    links.classList.remove('active');
                    document.querySelector('header nav a[herf*=' + id + ']').classList.add('active');
                })
            }
        })

    let header = document.querySelector('header');

    header.classlist.toggle('sticky', window.scrollY > 1000);
}