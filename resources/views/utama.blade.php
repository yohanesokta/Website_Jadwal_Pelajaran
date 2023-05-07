<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/res/Desk.css">
</head>
<body>
    <nav>
        <form action="" method="GET">
            <select name="Day" id="Day"  onchange='if(this.value != "{{ $Day }}") { this.form.submit(); }'>
                <option value="Senin">Senin</option>
                <option value="Selasa">Selasa</option>
                <option value="Rabu">Rabu</option>
                <option value="Kamis">Kamis</option>
                <option value="Jumat">Jumat</option>
            </select>
        </form>
    </nav>
        
    @foreach ($Log as $log)
    <div class="jd">
        <div class="jd-co" style="background-color:gray; color:white;">
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
                 @if($data->Code == $props)
                    <p @if ($props == '0A' || $props == '0B' || $props == '0C')
                        style="color:red; font-weight:bold;"
                    @endif >{{ $data->Pelajaran }}</p>
                 @endif
             @endforeach
            </div>
        </div>
        @endfor
        
        <footer>
            <div class="f-data">
                <div class="image">
                    <img src="/res/github-mark.svg" alt="githubl0go">
                </div>
                 <p>Project On Github</p>
                 <a href="https://github.com/yohanesokta/Jadwal" target="_blank">https://github.com/yohanesokta</h5>
            </div>
        </footer>
    </div>
    @endforeach
    <script>
        document.getElementById('Day').value = '{{ $Day }}'
    </script>
</body>
</html>