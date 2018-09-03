<ul>
    <?php
    foreach ($menu as $row) { 
        $submenu = $this->db->get_where('t_menu_website', array('is_main_menu'=>$row->id_menu));
        if($submenu->num_rows()>0){
            echo "<li>".anchor(base_url().$row->link,$row->nama_menu)."<ul>";
            foreach ($submenu->result() as $value) {
                echo "<li>". anchor(base_url().$row->link."/".$value->link,$value->nama_menu)."</li>";                    
            }
            echo "</ul></li>";
        }
        else{
            echo anchor(base_url().$row->link,"<li>".$row->nama_menu."</li>");        
        }
    }
    ?>
</ul>    
