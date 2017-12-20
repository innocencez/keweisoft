function setTab(C,D,E,A,F){for(i=E;i<=A;i++){if(document.getElementById(C+i)!=null&&typeof document.getElementById(C+i)!="undefined"){var G=document.getElementById(C+i);var B=document.getElementById(C+"_DV"+i);G.className=i==D?F:"";B.style.display=i==D?"block":"none"}}};

