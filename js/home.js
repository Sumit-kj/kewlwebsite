document.addEventListener("DOMContentLoaded",function(){
    var cn=document.getElementsByClassName("ADD");
    var myfunc=function() {
        var attr=this.parentElement.childNodes[4];
        console.log(attr);
        var val2 = parseInt(attr.innerHTML);
        console.log(val2);
        if(val2==0)
        {
            this.parentElement.childNodes[3].disabled=false;
        }
        val2++;

        if(val2<10)
            attr.innerHTML="0"+val2;
        else
            attr.innerHTML=val2;
            console.log("Add clicked!");
    }

   
        var cn2=document.getElementsByClassName("SUB");
        var subfunc=function() {
            var attr2=this.parentElement.childNodes[4];
            var val3= parseInt(attr2.innerHTML);
            if(val3==0)
            {
                this.disabled=true;
            }
            else{
                this.disabled=false;
            val3--;
            if(val3<10)
                attr2.innerHTML="0"+val3;
            else
                attr2.innerHTML=val3;
            // console.log(attr2);
            }
    
        }

        var cn3 = document.getElementsByClassName("khoj");
        // console.log(cn3);
        var visfunc=function() {
            var val4=this.parentElement.childNodes;
            // console.log(this.className.toString());
            var classesSelected = this.className.toString();
            var classes = classesSelected.split(" ");
            var foundClass=classes[0];
            if(foundClass == 'home')
            {
                var itemsArray = document.getElementsByClassName('item');
                for(var iter =0; iter<itemsArray.length; iter++)
                    itemsArray[iter].style.display = 'block';
                return;
            }
            var mila=document.getElementsByClassName(foundClass);

            var milaCount = 1;
            console.log(mila);
            var itemsArray = document.getElementsByClassName('item');
            for( var iter=0; iter<itemsArray.length; iter++)
            {
                if(itemsArray[iter]!=mila[milaCount]){
                    itemsArray[iter].style.display = 'none';
                    console.log(itemsArray[iter]);
                }
                else{
                    milaCount++;
                    itemsArray[iter].style.display = 'block';
                    console.log("Not Hidden");
                    console.log(itemsArray[iter]);
                }
            }          
        }
    for (var i = 0; i < cn.length; i++) {
        cn[i].addEventListener("click", myfunc, false);
    }
    for(var i=0;i<cn2.length;i++)
    {
        cn2[i].addEventListener("click",subfunc,false);
    }
    for(var i=0;i<cn3.length;i++)
    {
        cn3[i].addEventListener("click",visfunc,false);
    }
    var itemImage=document.getElementsByClassName("card_container");
    var arrayImages=["band1.jpg","band2.jpg","cap1.jpg","cap2.jpg","chain1.jpg","chain2.jpg","shade1.jpg","shade2.jpg","vest1.jpg","vest2.jpg"];
    // for(var i=0;i<arrayImages.length;i++)
    // {
    //     itemImage[i].innerHTML="<img class=\"item_image\" src=\'"+arrayImages[i]+"' width=\"15%\"><h4 class=\"item_name\"></h4><h4 class=\"item_price\"></h4><button class=\"buy_button\">BUY</button>";
    // }

    var cartBtnClicked = function(){
        location.href = "../php/storeCart.php";
    }

});



