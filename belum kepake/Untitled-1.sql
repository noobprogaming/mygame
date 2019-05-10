
SELECT id_game, name_game, min_cpu, min_vga, min_ram, cpu.name_cpu, vga.name_vga, ram.name_ram
    FROM game
        INNER JOIN cpu ON cpu.id_cpu=game.min_cpu
        INNER JOIN vga ON vga.id_vga=game.min_vga 
        INNER JOIN ram ON ram.id_ram=game.min_ram WHERE game.id_game=1;



SELECT id_game, name_game, rec_cpu, rec_vga, rec_ram, cpu.name_cpu, vga.name_vga, ram.name_ram
    FROM game
        INNER JOIN cpu ON cpu.id_cpu=game.rec_cpu
        INNER JOIN vga ON vga.id_vga=game.rec_vga 
        INNER JOIN ram ON ram.id_ram=game.rec_ram WHERE game.id_game=1;


SELECT user.id, name, password, gender, email, birth, joined, rig.id_cpu, rig.id_vga, rig.id_ram, cpu.name_cpu, vga.name_vga, ram.name_ram
    FROM user 
        INNER JOIN rig ON rig.id=user.id
        INNER JOIN cpu ON cpu.id_cpu=rig.id_cpu
        INNER JOIN vga ON vga.id_vga=rig.id_vga 
        INNER JOIN ram ON ram.id_ram=rig.id_ram WHERE rig.id=1