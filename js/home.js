document.onload(function(){
    var itemImage=document.getElementsByClassName("card_container");
    var arrayImages=["band1.jpg","band2.jpg","cap1.jpg","cap2.jpg","chain1.jpg","chain2.jpg","shade1.jpg","shade2.jpg","vest1.jpg","vest2.jpg"];
    for(var i=0;i<arrayImages.length;i++)
    {
        itemImage[i].innerHTML="<img class=\"item_image\" src=\'"+arrayImages[i]+"' width=\"15%\"><h4 class=\"item_name\"></h4><h4 class=\"item_price\"></h4><button class=\"buy_button\">BUY</button>";
    }
});
