function getDataSlide() {
    var information1_judul = document.getElementById('information1-judul').value;
    var information1_konten = document.getElementById('information1-konten').value;

    var information2_judul = document.getElementById('information2-judul').value;
    var information2_konten = document.getElementById('information2-konten').value;

    var information3_judul = document.getElementById('information3-judul').value;
    var information3_konten = document.getElementById('information3-konten').value;

    var information4_judul = document.getElementById('information4-judul').value;
    var information4_konten = document.getElementById('information4-konten').value;

    var information5_judul = document.getElementById('information5-judul').value;
    var information5_konten = document.getElementById('information5-konten').value;
    var data = [{
        title: '<a href="post-v1.html" class="link">' + information1_judul + ' : ' + '</a>',
        content: information1_konten,
        separator: '<span class="separator"><span class="separator-bar">/</span><span class="separator-bar">/</span></span>'
    }, {
        title: '<a href="post-v1.html" class="link">' + information2_judul + ' : ' + '</a>',
        content: information2_konten,
        separator: '<span class="separator"><span class="separator-bar">/</span><span class="separator-bar">/</span></span>'
    }, {
        title: '<a href="post-v1.html" class="link">' + information3_judul + ' : ' + '</a>',
        content: information3_konten,
        separator: '<span class="separator"><span class="separator-bar">/</span><span class="separator-bar">/</span></span>'
    }, {
        title: '<a href="post-v1.html" class="link">' + information4_judul + ' : ' + '</a>',
        content: information4_konten,
        separator: '<span class="separator"><span class="separator-bar">/</span><span class="separator-bar">/</span></span>'
    }, {
        title: '<a href="post-v1.html" class="link">' + information5_judul + ' : ' + '</a>',
        content: information5_konten,
        separator: '<span class="separator"><span class="separator-bar">/</span><span class="separator-bar">/</span></span>'
    }];
    return data
}