/*
Hey !! Bila kamu developer dari smk pgri ploso kamu
bisa mengedit variable di bawah sesuai jadwal yang
diberikan disekolah lo.

note: M = Variable MataPelajaran Jadi
      M10a = Mata pelajaran 10a
      V = Juga variable kedua
      jadi Vs1 = Variable Senin pelajaran pertama
      Vss1 = Variable selasa jam pertama (ditulis ss1)
      yang lain tinggal mengikuti abjad pertama
      contoh : (rabu(r1) Kamis(k1) jum`at(j1))

Sorry tidak menggunakan sql



Document type :Javascript 
Owner         : Yohanes
File Encript  : Read-only
Edited        : Only Owner
Deploy        : Github
*/

 // Create Variable Jadwal
  let M3a = "PAI";
  let M4a = "PJOK";
  let M7a = "Bahasa Inggris";
  let M10a = "PKWU";
  let M15a = "Matematika";
  let M16a = "Bahasa Indonesia";
  let M18a = "Bahasa Indonesia";
  let M20a = "PPKN";
  let M27b = "Bahasa Jawa";
  let M31b = "Desain Grafis";
  let M38a = "Animasi 2D/3D";
  let M43a = "Shooting";
  let  untitled = "-";

  let revisiondate = "30 September 2022";
  document.getElementById('rev-date').innerHTML += revisiondate;
  document.getElementById('info').innerHTML = untitled;
  // End Database Software


// database Senin Selasa
  let Vs1 = M38a;   let Vss1 = M15a;
  let Vs2 = M31b;   let Vss2 = M4a;
  let Vs3 = M31b;   let Vss3 = M3a;
  let Vs4 = M43a;   let Vss4 = M31b;

// Database rabu kamis Jumat

let Vr1 = M38a; let Vk1 = M38a; let Vj1= M38a;
let Vr2 = M15a; let Vk2 = M15a; let Vj2= M20a;
let Vr3 = M27b; let Vk3 = M7a;  let Vj3 = M31b;
let Vr4 = M10a; let Vk4 = M10a; let Vj4 = M18a;


// Senin
    document.getElementById('s1').innerHTML = Vs1;
    document.getElementById('s2').innerHTML = Vs2;
    document.getElementById('s3').innerHTML = Vs3;
    document.getElementById('s4').innerHTML = Vs4;

// Selasa

    document.getElementById('ss1').innerHTML = Vss1;
    document.getElementById('ss2').innerHTML = Vss2;
    document.getElementById('ss3').innerHTML = Vss3;
    document.getElementById('ss4').innerHTML = Vss4;

// Rabu
    document.getElementById('r1').innerHTML = Vr1;
    document.getElementById('r2').innerHTML = Vr2;
    document.getElementById('r3').innerHTML = Vr3;
    document.getElementById('r4').innerHTML = Vr4;

//  Kamis

    document.getElementById('k1').innerHTML = Vk1;
    document.getElementById('k2').innerHTML = Vk2;
    document.getElementById('k3').innerHTML = Vk3;
    document.getElementById('k4').innerHTML = Vk4;

//Jumat

    document.getElementById('j1').innerHTML = Vj1;
    document.getElementById('j2').innerHTML = Vj2;
    document.getElementById('j3').innerHTML = Vj3;
    document.getElementById('j4').innerHTML = Vj4;