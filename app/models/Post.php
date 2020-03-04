<?php


class Post
{
    // public function makepost($data){
        $this->db->query('INSERT INTO posts (user_id,title,content) VALUES (:user_id, :title, :content)');
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':content', $data['content']);
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
}