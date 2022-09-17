console.log("jawaban no 1");
function squareDiagram(n) {
    let hasil = "";
    for (let x = 1; x <= n; x++) {
        for (let y = 1; y <= n; y++) {
            if (x == y) {
                hasil += "*";
            } else {
                hasil += " ";
            }
        }
        hasil += "\n";
    }
    console.log(hasil);
}
squareDiagram(9);

console.log("jawaban no 2");
function squareDiagramright(n) {
    let hasil = "";
    for (let x = 1; x <= n; x++) {
        for (let y = 1; y <= n; y++) {
            if (x + y == 10) {
                hasil += "*";
            } else {
                hasil += " ";
            }
        }
        hasil += "\n";
    }
    console.log(hasil);
}
squareDiagramright(9);


console.log("jawaban no 3");
function crossStar(n) {
    let hasil = "";
    for (let x = 0; x <= n; x++) {
        for (let y = 0; y <= n; y++) {
            if (x + y == 8 || x==y) {
                hasil += "*";
            } else {
                hasil += " ";
            }
        }
        hasil += "\n";
    }
    console.log(hasil);
}
crossStar(8);

console.log("jawaban no 4");
function crosplusStar(n) {
    let hasil = "";
    for (let x = 0; x <= n; x++) {
        for (let y = 0; y <= n; y++) {
            if (x == y || x + y == 8 || x == 4 || y == 4) {
                hasil += "*";
            } else {
                hasil += " "
            }
        }
        hasil += "\n"
    }
    console.log(hasil);
}
crosplusStar(8);

console.log("jawaban no 5");
function squarecrosplusStar(n) {
    let hasil = "";
    for (let x = 0; x <= n; x++) {
        for (let y = 0; y <= n; y++) {
            if (x == 0 || x == 8 || y == 0 || y == 8 || x == y || x + y == 8) {
                hasil += "*";
            } else {
                hasil += " "
            }
        }
        hasil += "\n"
    }
    console.log(hasil);
}
squarecrosplusStar(8);

console.log("jawaban no 6");
function triangleleftStar(n) {
    let hasil = "";
    for (let x = 0; x <= n; x++) {
        for (let y = 0; y <= n; y++) {
            if (x >= y) {
                hasil += "*";
            } else {
                hasil += " ";
            }
        }
        hasil += "\n";
    }
    console.log(hasil);
}
triangleleftStar(8);

console.log("jawaban no 7");
function trianglerightStar(n) {
    let hasil = "";
    for (let x = 0; x <= n; x++) {
        for (let y = 0; y <= n; y++) {
            if (x+y >= 8) {
                hasil += "*";
            } else {
                hasil += " ";
            }
        }
        hasil += "\n";
    }
    console.log(hasil);
}
trianglerightStar(8);

console.log("jawaban no 8");
function hourglassVer(n) {
    let hasil = "";
    for (let x = 0; x <= n; x++) {
        for (let y = 0; y <= n; y++) {
            if (x==0 || x==1 && y>0 && y<8 || x==2 && y>1 && y<7 || x==3 && y>2 && y<6 || x==4 && y==4 || x==5 && y>2 && y<6 || x==6 && y>1 && y<7 || x==7 && y>0 && y<8 || x==8) {
                hasil += "*";
            } else {
                hasil += " ";
            }
        }
        hasil += "\n";
    }
    console.log(hasil);
}
hourglassVer(8);

console.log("jawaban no 9");
function hourglassHor(n) {
    let hasil = "";
    for (let x = 0; x <= n; x++) {
        for (let y = 0; y <= n; y++) {
            if (y==0 || y==1 && x>0 && x<8 || y==2 && x>1 && x<7 || y==3 && x>2 && x<6 || y==4 && x==4 || y==5 && x>2 && x<6 || y==6 && x>1 && x<7 || y==7 && x>0 && x<8 || y==8) {
                hasil += "*";
            } else {
                hasil += " ";
            }
        }
        hasil += "\n";
    }
    console.log(hasil);
}
hourglassHor(8);

console.log("jawaban no 10");
function lastNum(n) {
    let hasil = "";
    for (let x = 0; x <= n; x++) {
        for (let y = 0; y <= n; y++) {
            if (y==0 && x<5 || y==1 && x<5 && x>0 || y==2 && x<5 && x>1 || y==3 && x<5 && x>2 || y==4 && x<5 && x>3 || y==5 && x>3 && x<6 || y==6 && x>3 && x<7 || y==7 && x>3 && x<8 || y==8 && x>3 && x<9) {
                hasil += "*";
            } else {
                hasil += " ";
            }
        }
        hasil += "\n";
    }
    console.log(hasil);
}
lastNum(8);
