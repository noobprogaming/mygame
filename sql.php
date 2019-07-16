<?php

    $sql_user = ("
    SELECT user.id, name, password, gender, email, birth, joined, pp, rig.id_cpu, rig.id_vga, rig.id_ram, rig.id_ssd, rig.id_hdd, rig.id_psu, rig.id_kb, rig.id_mouse, cpu.name_cpu, vga.name_vga, ram.name_ram, ssd.name_ssd, hdd.name_hdd, psu.name_psu, kb.name_kb, mouse.name_mouse 
    FROM user 
        INNER JOIN rig ON rig.id=user.id
        INNER JOIN cpu ON cpu.id_cpu=rig.id_cpu
        INNER JOIN vga ON vga.id_vga=rig.id_vga 
        INNER JOIN ram ON ram.id_ram=rig.id_ram
        INNER JOIN ssd ON ssd.id_ssd=rig.id_ssd
        INNER JOIN hdd ON hdd.id_hdd=rig.id_hdd
        INNER JOIN psu ON psu.id_psu=rig.id_psu
        INNER JOIN kb ON kb.id_kb=rig.id_kb
        INNER JOIN mouse ON mouse.id_mouse=rig.id_mouse WHERE user.email='$email';
    ");
    $sql_age = ("
    SELECT DATEDIFF((SELECT CURDATE()), (SELECT birth FROM user WHERE email='$email'))/365 AS age;
    ");    
    $sql_min = ("
    SELECT id_game, name_game, min_cpu, min_vga, min_ram, cpu.name_cpu, vga.name_vga, ram.name_ram
    FROM game
        INNER JOIN cpu ON cpu.id_cpu=game.min_cpu
        INNER JOIN vga ON vga.id_vga=game.min_vga 
        INNER JOIN ram ON ram.id_ram=game.min_ram WHERE game.id_game='$id_game';
    ");
    $sql_rec = ("
    SELECT id_game, name_game, rec_cpu, rec_vga, rec_ram, rec_storage, cpu.name_cpu, vga.name_vga, ram.name_ram
    FROM game
        INNER JOIN cpu ON cpu.id_cpu=game.rec_cpu
        INNER JOIN vga ON vga.id_vga=game.rec_vga 
        INNER JOIN ram ON ram.id_ram=game.rec_ram WHERE game.id_game='$id_game';
    ");
    $sql_cpu = ("SELECT * FROM cpu ORDER BY name_cpu ASC;");
    $sql_vga = ("SELECT * FROM vga ORDER BY name_vga ASC;");
    $sql_ram = ("SELECT * FROM ram;");
    $sql_psu = ("SELECT * FROM psu ORDER BY name_psu ASC;");
    $sql_ssd = ("SELECT * FROM ssd ORDER BY name_ssd ASC;");
    $sql_hdd = ("SELECT * FROM hdd ORDER BY name_hdd ASC;");
    $sql_kb = ("SELECT * FROM kb ORDER BY name_kb ASC;");
    $sql_mouse = ("SELECT * FROM mouse ORDER BY name_mouse ASC;");
    
    $result = $koneksi->query($sql_user);
    while($row=$result->fetch_assoc()){
        extract($row); 
        $u_id = $row ['id'];
        $u_name = $row ['name'];
        $u_password = $row ['password'];
        $u_gender = $row ['gender'];
        $u_email = $row ['email'];
        $u_birth = $row ['birth'];
        $u_joined = $row ['joined'];
        $u_pp = $row ['pp'];
        $u_idcpu = $row ['id_cpu'];
        $u_idvga = $row ['id_vga'];
        $u_idram = $row ['id_ram'];
        $u_idssd = $row ['id_ssd'];
        $u_idhdd = $row ['id_hdd'];
        $u_idpsu = $row ['id_psu'];
        $u_idkb = $row ['id_kb'];
        $u_idmouse = $row ['id_mouse'];
        $u_cpu = $row ['name_cpu'];
        $u_vga = $row ['name_vga'];
        $u_ram = $row ['name_ram'];
        $u_ssd = $row ['name_ssd'];
        $u_hdd = $row ['name_hdd'];
        $u_psu = $row ['name_psu'];
        $u_kb = $row ['name_kb'];
        $u_mouse = $row ['name_mouse'];
    }

    $result = $koneksi->query($sql_age);
    while($row=$result->fetch_assoc()){
        extract($row); 
        $u_age = $row ['age'];
    }

    $result = $koneksi->query($sql_min);
    while($row=$result->fetch_assoc()){
        extract($row);
        $idgame = $row ['id_game'];
        $namegame = $row ['name_game'];
        $m_idcpu = $row ['min_cpu'];
        $m_idvga = $row ['min_vga'];
        $m_idram = $row ['min_ram'];
        $m_ncpu = $row ['name_cpu'];
        $m_nvga = $row ['name_vga'];
        $m_nram = $row ['name_ram'];
    }

    $result = $koneksi->query($sql_rec);
    while($row=$result->fetch_assoc()){
        extract($row);
        $r_idcpu = $row ['rec_cpu'];
        $r_idvga = $row ['rec_vga'];
        $r_idram = $row ['rec_ram'];
        $r_storage = $row ['rec_storage'];
        $r_ncpu = $row ['name_cpu'];
        $r_nvga = $row ['name_vga'];
        $r_nram = $row ['name_ram'];
    }

?>