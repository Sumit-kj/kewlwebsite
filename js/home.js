var itemImage=document.getElementsByClassName("item_image");
var arrayImages=["band1.jpg","band2.jpg","cap1.jpg","cap2.jpg","chain1.jpg","chain2.jpg","shade1.jpg","shade2.jpg","vest1.jpg","vest2.jpg"];
for(var i=0;i<itemImage.length;i++)
{
    itemImage[i].attributes(src,arrayImages[i]);
}