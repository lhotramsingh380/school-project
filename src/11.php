<?php
class ComputerScience {
    public function latestDevelopments() {
        $technologies = array(
            'Artificial Intelligence',
            'Machine Learning',
            'Deep Learning',
            'Big Data Analytics',
            'Cloud Computing',
            'Internet of Things',
            'Blockchain'
        );
        shuffle($technologies);
        return $technologies;
    }
}