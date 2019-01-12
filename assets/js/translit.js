function translit() {
    var title = document.getElementById("title").value;
    var link = title;

    link = link.split(' ').join('-');
    link = link.split('й').join('j');
    link = link.split('ц').join('ts');
    link = link.split('у').join('u');
    link = link.split('к').join('k');
    link = link.split('е').join('e');
    link = link.split('н').join('n');
    link = link.split('г').join('g');
    link = link.split('ш').join('sh');
    link = link.split('щ').join('shch');
    link = link.split('з').join('z');
    link = link.split('х').join('h');
    link = link.split('ї').join('ji');

    link = link.split('ф').join('f');
    link = link.split('і').join('i');
    link = link.split('в').join('v');
    link = link.split('а').join('a');
    link = link.split('п').join('p');
    link = link.split('р').join('r');
    link = link.split('о').join('o');
    link = link.split('л').join('l');
    link = link.split('д').join('d');
    link = link.split('ж').join('zh');
    link = link.split('є').join('je');

    link = link.split('я').join('ja');
    link = link.split('ч').join('ch');
    link = link.split('с').join('s');
    link = link.split('м').join('m');
    link = link.split('и').join('y');
    link = link.split('т').join('t');
    link = link.split('ь').join('');
    link = link.split('б').join('b');
    link = link.split('ю').join('ju');

    link = link.split('.').join('');
    link = link.split(',').join('');
    link = link.split('!').join('');
    link = link.split('"').join('');
    link = link.split('№').join('');
    link = link.split(';').join('');
    link = link.split('%').join('');
    link = link.split(':').join('');
    link = link.split('?').join('');
    link = link.split('*').join('');
    link = link.split('(').join('');
    link = link.split(')').join('');
    link = link.split('_').join('');
    link = link.split('-').join('-');
    link = link.split('=').join('');
    link = link.split('+').join('');
    link = link.split('[').join('');
    link = link.split(']').join('');
    link = link.split('{').join('');
    link = link.split('}').join('');
    link = link.split('/').join('');
    link = link.split('~').join('');
    link = link.split('@').join('');
    link = link.split('#').join('');
    link = link.split('$').join('');
    link = link.split('^').join('');
    link = link.split('&').join('');
    link = link.split('«').join('');
    link = link.split('»').join('');

    link = link.split('Й').join('y');
    link = link.split('Ц').join('ts');
    link = link.split('У').join('u');
    link = link.split('К').join('k');
    link = link.split('Е').join('e');
    link = link.split('Н').join('n');
    link = link.split('Г').join('g');
    link = link.split('Ш').join('sh');
    link = link.split('Щ').join('shch');
    link = link.split('З').join('z');
    link = link.split('Х').join('h');
    link = link.split('Ї').join('yi');

    link = link.split('Ф').join('f');
    link = link.split('І').join('i');
    link = link.split('В').join('v');
    link = link.split('А').join('a');
    link = link.split('П').join('p');
    link = link.split('Р').join('r');
    link = link.split('О').join('o');
    link = link.split('Л').join('l');
    link = link.split('Д').join('d');
    link = link.split('Ж').join('zh');
    link = link.split('Є').join('ye');

    link = link.split('Я').join('ja');
    link = link.split('Ч').join('ch');
    link = link.split('С').join('s');
    link = link.split('М').join('m');
    link = link.split('И').join('y');
    link = link.split('Т').join('t');
    link = link.split('Ь').join('');
    link = link.split('Б').join('b');
    link = link.split('Ю').join('ju');

    document.getElementById("link").value = link;
}