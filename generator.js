function generator(){
    var jokes = ["Hvor langt kan en neger løbe?.. \xa0 \xa0 \xa0 Til kæden strammer", "Jeg overvejer at gifte mig med en tysker, er det over grænsen?", "Hvad kalder man en indbagt haj?.. \xa0 \xa0 \xa0 Haj med dej", "Alle børnene gik forbi lorten undtagen Stella, hun troede det var Nutella", "Hvorfor var blondinen glad for, at samle et puzzlespil på 6 måneder?.. \xa0 \xa0 \xa0 Fordi der stod 2-4 år", "Hvad er forskellen på en myg og en blondine?.. \xa0 \xa0 \xa0 Myggen stopper med at suge når man klapper den", "Hvad hedder verdens fattigste konge?.. \xa0 \xa0 \xa0 Kong Kurs", "Hvorfor putter man altid en baby i blenderen med fødderne først?.. \xa0 \xa0 \xa0 Så man kan se dens ansigtsudtryk", "Hvad er det varmeste i en død baby?.. \xa0 \xa0 \xa0 Min pik", "Hvad laver edderkoppen når den keder sig?.. \xa0 \xa0 \xa0 Den går på nettet", "Rygere er også en slags mennesker, bare ikke så længe.", "Hvad har man gjort galt, hvis konen kommer ind i stuen og brokker sig?.. \xa0 \xa0 \xa0 Man har gjort lænken for lang!", "Hvad er ligheden mellem min far og politiet?.. \xa0 \xa0 \xa0 De kommer så hurtigt de kan!", "Hvorfor i alverden vækkede du mig?.. \xa0 \xa0 \xa0 Du glemte at tage dine sovepiller!", "Hvorfor kiggede blondinen op på solen i 4 timer?.. \xa0 \xa0 \xa0 Fordi hun så gerne ville have brune øjne!", "Hvorfor kører blondiner kun i BMWér?.. \xa0 \xa0 \xa0 Fordi det er det eneste bilmærke de kan stave til", "Hvorfor laver blondiner aldrig dobbeltportion af en opskrift?.. \xa0 \xa0 \xa0 Fordi ovnen ikke kan komme op på 400 grader!", "Hvad er hårdest ved at hamre en død baby fast til en væg?.. \xa0 \xa0 \xa0 Min pik", "Hvordan får men lettest en baby op af en blender?.. \xa0 \xa0 \xa0 Med nachos"];
    var oneJoke = jokes[Math.floor(Math.random()* jokes.length)];
    // alert(oneJoke);
    if (document.getElementById("newjoke")) {
        document.getElementById("text").removeChild(document.getElementById("newjoke"));
        }
    var element = document.createElement("div");
    element.setAttribute("id", "newjoke");
    element.appendChild(document.createTextNode(oneJoke));
    document.getElementById("text").appendChild(element);
}
