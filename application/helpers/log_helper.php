<?php

function is_log_in()
{
    $ci = get_instance();

    if (!$ci->session->userdata('email')) {
        $ci->session->set_flashdata('message', 
            '<div class="alert alert-danger" role="alert">
                Maaf anda tidak berhak mengakses halaman ini. Silakan login terlebih dahulu!
            </div>'
        );
        redirect('auth');
    } else {
        $role_id = $ci->session->userdata('role_id');
        $menu = strtolower($ci->uri->segment(1)); // penting untuk PostgreSQL

        // Case-insensitive match untuk PostgreSQL
        $ci->db->where('LOWER(menu)', $menu);
        $queryMenu = $ci->db->get('user_menu')->row_array();

        if ($queryMenu) {
            $menu_id = $queryMenu['id'];

            $userAccess = $ci->db->get_where('user_access_menu', [
                'role_id' => $role_id,
                'menu_id' => $menu_id
            ]);

            // if ($userAccess->num_rows() < 1) {
            //     redirect('auth/blocked');
            // }
        } 
        // else {
        //     redirect('auth/blocked');
        // }
    }
}


function check_acess($role_id, $menu_id)
{
  $ci = get_instance();

  $ci->db->where('role_id', $role_id);
  $ci->db->where('menu_id', $menu_id);
  $result = $ci->db->get('user_access_menu');

  if($result->num_rows() > 0 ){
      return "checked='checked'";
  }
}