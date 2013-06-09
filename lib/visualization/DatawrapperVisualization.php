<?php

class DatawrapperVisualization {

    private static $instance;

    public static function getInstance() {
        if (!isset(self::$datawrapper)) self::$instance = new DatawrapperVisualization();
        return self::$instance;
    }

    public static function register($meta) { return self::getInstance()->_register($meta); }
    public static function all() { return self::getInstance()->_all(); }
    public static function get($id) { return self::getInstance()->_get($id); }

    // non-static definitions below

    private $visualizations;

    public function _register($meta) {
        $this->visualizations[$meta['id']] = $meta;
    }

    public function _all($foo) {
        $res = array_values($this->visualizations);
        // sort by something
        usort($res, function ($a, $b) {
            if (!isset($a['order'])) $a['order'] = 99999;
            if (!isset($b['order'])) $b['order'] = 99999;
            return $a['order'] - $b['order'];
        });
        return $res;
    }

    public function _get($id) {
        if (!isset($this->visualizations[$id])) return false;
        $meta = $this->visualizations[$id];
        $meta['hasCSS'] = file_exists(ROOT_PATH . 'www/static/visualizations/' . $id . '/style.css');
        return $meta;
    }
}


