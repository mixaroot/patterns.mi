<?php

namespace views;
/**
 * Common views
 * Class Common
 * @package views
 */
class Common
{
    /**
     * include css js to html page
     */
    public function __construct()
    {
        echo '<link rel="stylesheet" type="text/css" href="css/index.css">';
    }

    /**
     * Common render for few patterns
     * @param $title
     * @param $description
     * @param $filesForExample
     * @param $files
     * @param $classes
     */
    public function render($title, $description, $filesForExample, $files, $classes)
    {
        $this->renderHeader($title);
        $this->renderDescription($description);
        $this->renderExampleFiles($filesForExample);
        $this->renderResultFiles($files);
        $this->renderClasses($classes);
    }

    public function renderResultObject($title, $description, $filesForExample, $object, $classes)
    {
        $this->renderHeader($title);
        $this->renderDescription($description);
        $this->renderExampleFiles($filesForExample);
        $this->renderObject($object);
        $this->renderClasses($classes);
    }

    /**
     * Render header of page
     * @param $title
     */
    private function renderHeader($title)
    {
        ?>
        <header>
            <a href="/">Меню</a>

            <h1><?= $title ?></h1>
        </header>
        <?
    }

    /**
     * Render description of page
     * @param $description
     */
    private function renderDescription($description)
    {
        ?>
        <div>
            <?= $description ?>
        </div>
        <?
    }

    /**
     * Render list of inputs file
     * @param $filesForExample
     */
    private function renderExampleFiles($filesForExample)
    {
        ?>
        <hr>
        <h2>Входные файлы:</h2>
        <div>
            <?
            foreach ($filesForExample as $name => $string) {
                echo '<div class="file">';
                echo "<h3>$name</h3>";
                echo '<pre>';
                echo(htmlspecialchars($string));
                echo '</pre>';
                echo '</div>';
            }
            ?>
        </div>
        <?
    }

    /**
     * Render list of result files
     * @param $files
     */
    private function renderResultFiles($files)
    {
        ?>
        <div class="clearBoth"></div>
        <hr>
        <h2>Результаты:</h2>
        <div>
            <?
            foreach ($files as $title => $string) {
                echo '<div class="file">';
                echo "<h2>$title</h2>";
                echo '<pre>';
                print_r($string);
                echo '</pre>';
                echo "</div>";
            }
            ?>
        </div>
        <?
    }

    /**
     * Render result objects
     * @param $object
     */
    protected function renderObject($object)
    {
        ?>
        <div class="clearBoth"></div>
        <hr>
        <div>
            <?
            foreach ($object as &$item) {
                echo '<div class="file">';
                echo '<pre>';
                print_r($item);
                echo '</pre>';
                echo '</div>';
            }
            ?>
        </div>
        <?
    }

    /**
     * Render list of classes
     * @param $classes
     */
    private function renderClasses($classes)
    {
        ?>
        <div class="clearBoth"></div>
        <hr>
        <h2>Классы:</h2>
        <div>
            <?
            foreach ($classes as $file => $string) {
                echo '<div class="class">';
                echo "<h3>$file</h3>";
                echo '<pre>';
                echo(htmlspecialchars($string));
                echo '</pre>';
                echo '</div>';
            }
            ?>
        </div>
        <?
    }
}