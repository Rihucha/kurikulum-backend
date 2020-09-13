<?php
    $students = [
        [
            'id' => 'IT-001',
            'name' => 'Ridwan',
            'division' => 'PHP Backend',
            'age' =>25,
        ],
        [
            'id' => 'IT-010',
            'name' => 'Achmad',
            'division' => 'Java for Android',
            'age' =>23,
        ],
        [
            'id' => 'IT-005',
            'name' => 'Yusuf',
            'division' => 'ReactJS',
            'age' =>22,
        ],
        [
            'id' => 'IT-002',
            'name' => 'Arief',
            'division' => 'PHP Backend',
            'age' =>21,
        ],
        [
            'id' => 'IT-004',
            'name' => 'Dayat',
            'division' => 'React Native',
            'age' =>21,
        ],
        [
            'id' => 'IT-017',
            'name' => 'Lutfi',
            'division' => 'ReactJS',
            'age' =>18,
        ],
    ];
    
    //Function
    function sortID($arr){
        asort($arr);
        print_r($arr);
    }
    function sortName($arr){
        foreach($arr as $key =>$value){
            $name[] = $value['name'];
        }
        array_multisort($name, SORT_ASC, $arr);
        print_r($arr);
    }
    function division($arr){
        foreach($arr as $key => $value){
            if($arr[$key]['division'] == "PHP Backend"){
                print_r($arr[$key]);
            }
        }
    }
    function batasUmur($arr){
        foreach($arr as $key => $value){
            if($arr[$key]['age']<25){
                print_r($arr[$key]);
            }
        }
    }
    function ratarataUsia($arr){
        $sum = 0;
        foreach($arr as $key => $value){
            $sum += $arr[$key]['age'];
        }
        $hasil = $sum/count($arr);
        echo $hasil;
    }

    function sortAge($arr){
        foreach($arr as $key => $value){
            $age[] = $value['age'];
        }
        array_multisort($age, SORT_ASC, $arr);
        print_r($arr);   
    }
    print_r($students);
    
    echo "\n1. Urutkan berdasarkan ID\n";
    echo "2. Urutkan berdasarkan Nama\n";
    echo "3. Santri dengan minat PHP Backend\n";
    echo "4. Santri berusia kurang dari 25\n";
    echo "5. Rata-rata usai santri\n";
    echo "6. Urutkan berdasarkan Usia\n";
    echo "Pilih menu sistem : ";
    $pilih = trim(fgetc(STDIN));

    switch($pilih){
        case 1:
            sortID($students);
        break;

        case 2:
            sortName($students);
        break;

        case 3:
            division($students);
        break;

        case 4:
            batasUmur($students);
        break;

        case 5:
            ratarataUsia($students);
        break;

        default:
            sortAge($students);
        break;
    }

    

?>