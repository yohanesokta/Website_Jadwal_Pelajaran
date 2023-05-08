<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Release Beta | Jadwal Pelajaran XIMM</title>
    <link rel="stylesheet" href="/res/Desk.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#2b5797">
	<meta name="theme-color" content="#ffffff">
</head>
<body>
    <nav>
        <form action="" method="GET">
            <a id="menu">
                <i class="fa-solid fa-bars"></i>
            </a>
            <select name="Day" id="Day"  onchange='if(this.value != "{{ $Day }}") { this.form.submit(); }'>
                <option value="Senin">Senin</option>
                <option value="Selasa">Selasa</option>
                <option value="Rabu">Rabu</option>
                <option value="Kamis">Kamis</option>
                <option value="Jumat">Jumat</option>
            </select>
            <a href="https://github.com/yohanesokta/Jadwal" target="_blank">
                <i class="fa-brands fa-github"></i>
            </a>
        </form>
       
    </nav>
        
    @foreach ($Log as $log)
    <div class="jd" id="Jadwal_colom">
        <div class="jd-co" style="background-color:rgb(161, 98, 4); color:white;">
            <div class="jam">
                Jam
            </div>
            <div class="mapel">
                Mapel
            </div>
        </div>
        {{-- 1 --}}
        @for ($i = 0 ; $i <= 12 ; $i++)
        @php
        $dataNum = data_get($Ar,$i, 'e');
        $props  = get_object_vars($log);
        $props = $props[$dataNum];
        @endphp  
        <div class="jd-co">
            <div class="jam">
                {{ $i+1 }}
            </div>
            <div class="mapel">
             @foreach ($Data as $data)
             <div class="isi">
                 @if($data->Code == $props)
                    <p @if ($props == '0A' || $props == '0B' || $props == '0C')
                        style="color:rgb(245, 202, 14); font-weight:bold;"
                    @endif >{{ $data->Pelajaran }}</p>
                    <span>{{ $data->guru }}</span>
                 @endif
                </div>
             @endforeach
            </div>
        </div>
        @endfor
{{-- PLACE FOOTER --}}
    </div>
    @endforeach

    <div class="add" id="add">
        <p> Menu Release comming soon | v2.01b2 | YohanesOktanio <br> <br>
            Futur di Menu : <br>
            -> menambahkan berbagai kelas <br>
            -> edit mapel kelas <br>
            -> pilih kelas yang tersedia <br>
            -> cari berdasarkan no Guru mapel 
        </p>
    </div>

    <script>
        document.getElementById('Day').value = '{{ $Day }}'

        let menu = document.getElementById('menu')
        let add = document.getElementById('add')
        let onMenu = false;
        menu.onclick = function(){
            if(onMenu == false){
                document.getElementById('Jadwal_colom').style.display = 'none'
                onMenu = true
                menu.innerHTML = '<i class="fa-solid fa-x"></i>'                
                add.style.display = 'block'
            }else{
                document.getElementById('Jadwal_colom').style.display = 'block'
                onMenu = false
                menu.innerHTML = '<i class="fa-solid fa-bars"></i>'
                add.style.display = 'none'
            }
        }
    </script>
</body>
</html>