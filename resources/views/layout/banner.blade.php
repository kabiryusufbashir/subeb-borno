<!-- Fourth Caption  -->
<div class="mySlides">
    <div id="fourthCaption">
        <div class="firstCaptionContent">
            BORNO STATE <br>
            Universal Basic Education Board <br>
            (SUBEB)
        </div>
    </div>
</div>
<!-- First Caption  -->
<div class="mySlides">
    <div id="firstCaption">
        <div class="firstCaptionContent">
            "Education is the key to success in life, <br> and teachers make a lasting impact <br> in the lives of their students." <br> - Solomon Ortiz    
        </div>
    </div>
</div>
<!-- Second Caption  -->
<div class="mySlides">
    <div id="secondCaption">
        <div class="firstCaptionContent">
            "The best education is not given to students; <br> it is drawn out of them." <br> - Gerald Belcher
        </div>
    </div>
</div>
<!-- Third Caption  -->
<div class="mySlides">
    <div id="thirdCaption">
        <div class="firstCaptionContent">
            "Education is the most powerful weapon <br> which you can use to change the world." <br> - Nelson Mandela
        </div>
    </div>
</div>
<script>
    var myIndex = 0;
    carousel();

    function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
        x[myIndex-1].style.display = "block";  
        setTimeout(carousel, 8000);    
    }
</script>