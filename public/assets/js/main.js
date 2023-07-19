

// scroll Selections
window.onscroll = () =>
{
    let header = document.querySelector('header');

    header.classlist.toggle('sticky', window.scrollY > 100);
}