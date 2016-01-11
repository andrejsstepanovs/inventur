<?php

class Vaola
{
    public function isBox($value)
    {
        $value = trim($value);
        $data  = explode('-', $value);

        return count($data) == 5;
    }

    public function prepareData(array $items)
    {
        $data = [];
        $box  = null;
        foreach ($items as $item) {
            if ($this->isBox($item)) {
                $box = $item;
                continue;
            }
            if (!array_key_exists($box, $data)) {
                $data[$box] = [];
            }
            $data[$box][] = $item;
        }

        return $data;
    }

    public function sync(array $data)
    {
        foreach ($data as $box => $items) {
            $params = [
                'items'  => $items,
                'submit' => 'submit',
            ];
            $this->post($params);
        }
    }

    public function post(array $params)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://localhost/post');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));

        $response = curl_exec($ch);

        curl_close ($ch);

        return $response;
    }
}