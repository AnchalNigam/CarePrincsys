function selecttype(val) {
	
	if(val==4){
  $('.influencer').removeClass('hidden');
	} 
	else{
		$('.influencer').addClass('hidden');
	}
	
}
function fetchinternational() {
	var count=0;
	var news="international";
	
	var feed = "http://feeds.bbci.co.uk/news/world/rss.xml";
$.ajax(feed, {
accepts:{
xml:"application/rss+xml"
},
dataType:"xml",
success:function(data) {
	

$(data).find("item").each(function () {	// or "item" or whatever suits your feed

var el = $(this);
if(count<6){
	count++;
display(el,count,news);


}

   
});
}
});


}
function fetchnational() {
	var count=0;
	var news="national";
	
	var feed = "https://timesofindia.indiatimes.com/rssfeedstopstories.cms";
$.ajax(feed, {
accepts:{
xml:"application/rss+xml"
},
dataType:"xml",
success:function(data) {
	

$(data).find("item").each(function () {	// or "item" or whatever suits your feed

var el = $(this);
if(count<6){
	count++;
display(el,count,news);


}

 
   
});
}
});


}
function fetchmedical() {
	var count=0;
	var news="medical";
	
	var feed = "https://timesofindia.indiatimes.com/rssfeeds/3908999.cms";
$.ajax(feed, {
accepts:{
xml:"application/rss+xml"
},
dataType:"xml",
success:function(data) {
	
$(data).find("item").each(function () {	// or "item" or whatever suits your feed

var el = $(this);
if(count<6){
	count++;
display(el,count,news);


}

 
});
}
});


}
function fetcheducation() {
	var count=0;
	var news="education";
	
	var feed = "https://timesofindia.indiatimes.com/rssfeeds/913168846.cms";
$.ajax(feed, {
accepts:{
xml:"application/rss+xml"
},
dataType:"xml",
success:function(data) {
	
$(data).find("item").each(function () {	// or "item" or whatever suits your feed

var el = $(this);
if(count<6){
	count++;
display(el,count,news);


}

 
});
}
});


}
function fetchentertainment() {
	var count=0;
	var news="entertainment";
	
	var feed = "https://timesofindia.indiatimes.com/rssfeeds/1081479906.cms";
$.ajax(feed, {
accepts:{
xml:"application/rss+xml"
},
dataType:"xml",
success:function(data) {
	
$(data).find("item").each(function () {	// or "item" or whatever suits your feed

var el = $(this);
if(count<6){
	count++;
display(el,count,news);


}

 
});
}
});


}
function display(el,count,news) {
	
	var title=el.find("title").text();
	console.log(title);
	var description=el.find("description").text();
	
	var linkk=el.find("link").text();
    var pubdate=el.find("pubDate").text();
	
	var id="#"+news+" #news"+count;
	$(id).find('.news-title').append('<a href="'+linkk+'">'+title+'</div');
	
	$(id).find('.pub-date em').text(pubdate);
	var content = $("<p>"+ el.find("description").text() +"</p>").text();
	$(id).find('.news-info p').text(content);
	
	
	
	
}
	
	
	
	
