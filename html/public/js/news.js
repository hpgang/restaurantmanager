const content = [
{
  title: 'Neue Speisen!',
  description: 'Schau was es neues gibt auf der Speisekarte!',
  keywords: [
  'lecker',
  'gesund',
  'vegan',],

  preview: 'https://www.welt.de/img/icon/essen-und-trinken/mobile166609085/0947932927-coriginal-w780/Lunch-bowl-of-quinoa-tricolore-chard-avocado-carrot-spaghetti.jpg' },

{
  title: 'Neue Öffnungszeiten',
  description: 'Jetzt bis 23 Uhr geöffnet',
  keywords: [
  'Zeit',],

  preview: 'https://www.mobile-university.de/fileadmin/_processed_/2/c/csm_Uhr_80a220524f.jpg' },

{
  title: 'Cafe',
  description: 'Heißer Cafe für kalte Tage.',
  keywords: [
  'coffee',],

  preview: 'https://www.malajunta.de/sites/default/files/styles/gallery_thumb/public/photos/gallery/2018-08/1613905_210245132511589_1538688423_n.jpg?h=55541bb6&itok=86HiNl0-' },

];



function render() {
  let root = document.getElementById('root');

  for (i = 0; i < content.length; i++) {

    let keywords = '';
    for (x = 0; x < content[i].keywords.length; x++) {
      keywords += `
        <a href="#" class="keyword">
          #${content[i].keywords[x]}
        </a>
        `;
    }

    root.innerHTML += `
      <div class="item">
        <span class="title">
          ${content[i].title}
        </span>

        <span class="description">
          ${content[i].description}
        </span>

        <div class="image"
          style="background-image: url(${content[i].preview}?auto=compress&cs=tinysrgb&dpr=2&h=190&w=260)">
        </div>

        <span class="keywords">
          ${keywords}
        </span>
      </div>
    `;
  }
}

render();