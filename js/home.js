document.addEventListener("DOMContentLoaded",function(){
    var cn=document.getElementsByClassName("ADD");
    console.log(cn);
    var myfunc=function() {
        var attr=this.parentElement.childNodes[9];
        console.log(attr);
        var val2 = parseInt(attr.innerHTML);
        if(val2==1)
        {
            this.parentElement.childNodes[7].disabled=false;
        }
        val2++;
        attr.innerHTML=val2;

    }

   
        var cn2=document.getElementsByClassName("SUB");
        console.log(cn2);
        var subfunc=function() {
            var attr2=this.parentElement.childNodes[9];
            console.log(attr2);
            var val3= parseInt(attr2.innerHTML);
            if(val3==0)
            {
                this.disabled=true;
            }
            else{
                this.disabled=false;
            val3--;
            attr2.innerHTML=val3;
            console.log(attr2);
            }
    
        }
    for (var i = 0; i < cn.length; i++) {
        cn[i].addEventListener("click", myfunc, false);
    }
    for(var i=0;i<cn2.length;i++)
    {
        cn2[i].addEventListener("click",subfunc,false);
    }
    var itemImage=document.getElementsByClassName("card_container");
    var arrayImages=["band1.jpg","band2.jpg","cap1.jpg","cap2.jpg","chain1.jpg","chain2.jpg","shade1.jpg","shade2.jpg","vest1.jpg","vest2.jpg"];
    for(var i=0;i<arrayImages.length;i++)
    {
        itemImage[i].innerHTML="<img class=\"item_image\" src=\'"+arrayImages[i]+"' width=\"15%\"><h4 class=\"item_name\"></h4><h4 class=\"item_price\"></h4><button class=\"buy_button\">BUY</button>";
    }
});


