<?php

namespace p4\blog\model;
use p4\blog\model\database\DbManager as DbManager;

class DashboardManager extends DbManager{

    // WIDGETS
    public function countCommentsAwaiting(){
        $db = $this->dbConnexion();
        $req = $db->prepare(
            'SELECT COUNT(*) nbre_comments 
            FROM comments 
            WHERE published = 0 AND id'
        );
        $req->execute(array());
        $countCommentsAwaiting = $req;
        return $countCommentsAwaiting;
    }

    public function countReports(){
        $db = $this->dbConnexion();
        $req = $db->prepare(
            'SELECT COUNT(*) nbre_reports 
            FROM reports 
            WHERE id'
        );
        $req->execute(array());
        $countReports = $req;
        return $countReports;
    }

    public function countPosts(){
        $db = $this->dbConnexion();
        $req = $db->prepare(
            'SELECT COUNT(*) nbre_posts 
            FROM posts 
            WHERE published = 1'
        );
        $req->execute(array());
        $countPosts = $req;
        return $countPosts;
    }

    public function countPostsAwaiting(){
        $db = $this->dbConnexion();
        $req = $db->prepare(
            'SELECT COUNT(*) nbre_posts 
            FROM posts 
            WHERE published = 0 AND id'
        );
        $req->execute(array());
        $countPostsAwaiting = $req;
        return $countPostsAwaiting;
    }

    public function countMembers(){
        $db = $this->dbConnexion();
        $req = $db->prepare(
            'SELECT COUNT(*) nbre_members 
            FROM members 
            WHERE id AND members_category = 2'
        );
        $req->execute(array());
        $countMembers = $req;
        return $countMembers;
    }
}