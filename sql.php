<?php

$sql_user = ("
    SELECT user.id, name, password, gender, email, birth, joined, rig.id_cpu, rig.id_vga, rig.id_ram, cpu.name_cpu, vga.name_vga, ram.name_ram
    FROM user 
        INNER JOIN rig ON rig.id=user.id
        INNER JOIN cpu ON cpu.id_cpu=rig.id_cpu
        INNER JOIN vga ON vga.id_vga=rig.id_vga 
        INNER JOIN ram ON ram.id_ram=rig.id_ram WHERE rig.id='$username';
    ");
    $sql_min = ("
    SELECT id_game, name_game, min_cpu, min_vga, min_ram, cpu.name_cpu, vga.name_vga, ram.name_ram
    FROM game
        INNER JOIN cpu ON cpu.id_cpu=game.min_cpu
        INNER JOIN vga ON vga.id_vga=game.min_vga 
        INNER JOIN ram ON ram.id_ram=game.min_ram WHERE game.id_game=1;
    ");
    $sql_rec = ("
    SELECT id_game, name_game, rec_cpu, rec_vga, rec_ram, cpu.name_cpu, vga.name_vga, ram.name_ram
    FROM game
        INNER JOIN cpu ON cpu.id_cpu=game.rec_cpu
        INNER JOIN vga ON vga.id_vga=game.rec_vga 
        INNER JOIN ram ON ram.id_ram=game.rec_ram WHERE game.id_game=1;
    ");
    
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
        $u_idcpu = $row ['id_cpu'];
        $u_idvga = $row ['id_vga'];
        $u_idram = $row ['id_ram'];
        $u_cpu = $row ['name_cpu'];
        $u_vga = $row ['name_vga'];
        $u_ram = $row ['name_ram'];
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
        $r_ncpu = $row ['name_cpu'];
        $r_nvga = $row ['name_vga'];
        $r_nram = $row ['name_ram'];
    }

?>