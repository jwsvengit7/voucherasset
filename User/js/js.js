

function numberToOrdinal(n) {
    n=""+n+"";
    if(n==0){
        console.log("0")
    }
    var len =n.split("").reverse();
    console.log(len)
var check ="";
if(len.length==1){
    if(len[0]==1){
    check="st"
    }
    else if(len[0]==2){
        check="nd"
    }
    else if(len[0]==3){
        check="rd"
    }
    console.log(`${len[0]}${check}`);
}
    else{       
    if(len.length==2){
        if(len[0][1]==1){
            check="st"
            }
            else if(len[0][1]==2){
                check="nd"
            }
            else if(len[0[1]]==3){
                check="rd"
            }
            else{
                check = "th"
            }
            console.log(`${len[1][0]}${check}`);
        }
    }  

}

numberToOrdinal(1)

numberToOrdinal(2)

numberToOrdinal(10)

