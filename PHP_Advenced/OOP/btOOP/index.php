<?php 
    class GaiXinh {
        public $khuon_mat;
        public $than_hinh;
        public $kieu_toc;
        public $tam_hon;

        function getGaiXinhNhat($khuonmat, $thanhinh, $kieutoc, $tamhon) {
            $this->khuon_mat = $khuonmat;
            $this->than_hinh = $thanhinh;
            $this->kieu_toc = $kieutoc;
            $this->tam_hon = $tamhon;
            if($this->khuon_mat >= 8 && $this->than_hinh >= 8 && $this->kieu_toc >= 8 && $this->tam_hon >= 8) {
                return "Đạt tiêu chuẩn";
            }
            return "Chưa đạt tiêu chuẩn";
        }
    }
    $hoa = new GaiXinh();
    echo $hoa->getGaiXinhNhat(10, 10, 10, 10);
    echo "<hr>";
    $trang = new GaiXinh();
    echo $hoa->getGaiXinhNhat(10, 10, 1, 10);


?>