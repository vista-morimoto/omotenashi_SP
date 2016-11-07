var xmlUrl = [      //feed��URL, �\��������ID
    ["http://www.jikei-hospitality.ac.jp/contents/blogs/feed","feed_blog"],
    ["http://www.jikei-hospitality.ac.jp/contents/blogs/category/opencampus/feed","feed_opencampus"],
];
 
var setNum = 3;  //�\������
google.load("feeds", "1");
 
function initialize() {
    for(var k = 0; k < xmlUrl.length; k++){
        feedAdd(xmlUrl[k][0],xmlUrl[k][1]);
    }
}
 
function feedAdd(rssUrl, rssID) {
    var feed = new google.feeds.Feed(rssUrl);
    var html = '';
    feed.setNumEntries(setNum);
    feed.load(function(result) {
        if (!result.error){
            for (var i = 0; i < setNum; i++) {
                var entry = result.feed.entries[i];
                var titleSnippet = entry.title;    //�L���^�C�g���擾
				if (titleSnippet.length > 28) {
				title = titleSnippet.substr(0, 28) + '�c';
				}else{
				title = entry.title;
				}
				var contentSnippet = entry.contentSnippet;
				text = contentSnippet.substr(0, 52) + '�c';
                //���t���擾���N�����𐮌`
                var publishedDate = entry.publishedDate;
                var pubDD = new Date(publishedDate);
                yy = pubDD.getYear();if (yy < 2000) { yy += 1900; }
                mm = pubDD.getMonth() + 1;dd = pubDD.getDate();
                var pubDate = yy +'�N'+ mm +'��'+ dd +'��';
                //�摜�@�������no-img
				var noPhoto = ("<img src='http://www.jikei-hospitality.ac.jp/images/blog/no-img.png' />");
				var entryImg = "";
				var imgCheck = entry.content.match(/(src="http:)[\S]+((\.jpg)|(\.JPG)|(\.jpeg)|(\.JPEG)|(\.png)|(\.PNG))/);
				if(imgCheck){
					entryImg += '<img ' + imgCheck[0] + '" >';
					} else {
						entryImg += noPhoto;
				}
 
                //html����
				html +='<a class="blog-wrap" href="' + entry.link + '"><dl class="blog-md"><dd class="blog-image">' + entryImg + '</dd><dt class="title">'+entry.title+'</dt><dd class="text">' + text + '</dd><dd class="date">' + pubDate + '</dd></dl></a>'; 
            }
            //�t�B�[�h�̏o��
            var container = document.getElementById(rssID);
            container.innerHTML = html;
        }
    });
}
google.setOnLoadCallback(initialize);