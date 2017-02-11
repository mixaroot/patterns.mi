<?php

namespace views;
/**
 * Общее представление для всех паттернов
 * Class Common
 * @package views
 */
class Common
{
    /**
     * подключение css и js файлво
     */
    public function __construct()
    {
        echo '<link rel="stylesheet" type="text/css" href="css/index.css">';
    }

    /**
     * Заглушка для еще не реализованных паттернов
     */
    public function renderNotImplement()
    {
        echo '<div>It have not implemented yet</div>';
    }

    /**
     * @param $title
     * @param $description
     * @param $filesForExample
     * @param $files
     * @param $classes
     */
    public function render($title, $description, $filesForExample, $files, $classes)
    {
        if (!empty($title)) {
            $this->renderHeader($title);
        }
        if (!empty($description)) {
            $this->renderDescription($description);
        }
        if (!empty($filesForExample)) {
            $this->renderExampleFiles($filesForExample);
        }
        if (!empty($files)) {
            $this->renderResultFiles($files);
        }
        if (!empty($classes)) {
            $this->renderClasses($classes);
        }
    }

    /**
     * @param $title
     * @param $description
     * @param $filesForExample
     * @param $object
     * @param $classes
     * @param array $diagrams
     */
    public function renderResultObject($title, $description, $plusMinus, $diagrams, $unitTests, $filesForExample, $object, $classes)
    {
        if (!empty($title)) {
            $this->renderHeader($title);
        }
        if (!empty($description)) {
            $this->renderDescription($description);
        }
        if (!empty($plusMinus)) {
            $this->renderPlusMinus($plusMinus);
        }
        if (!empty($diagrams)) {
            $this->renderDiagrams($diagrams);
        }
        if (!empty($unitTests)) {
            $this->renderUnitTests($unitTests);
        }
        if (!empty($filesForExample)) {
            $this->renderExampleFiles($filesForExample);
        }
        if (!empty($object)) {
            $this->renderObject($object);
        }
        if (!empty($classes)) {
            $this->renderClasses($classes);
        }
    }

    /**
     * Render header of page
     * @param $title
     */
    private function renderHeader($title)
    {
        echo "
        <header>
            <a href='/'>Меню</a>
            <h1>$title</h1>
        </header>
        ";
    }

    /**
     * Render description of page
     * @param $description
     */
    private function renderDescription($description)
    {
        echo "
        <div>
            $description
        </div>";
    }

    /**
     * @param $plusMinus
     */
    private function renderPlusMinus($plusMinus)
    {
        if (is_array($plusMinus) && !empty($plusMinus)) {
            foreach ($plusMinus as $name => $values) {
                if (is_array($values) && !empty($values)) {
                    echo "<h3>$name</h3>";
                    echo '<ul>';
                    foreach ($values as $value) {
                        echo "<li>$value</li>";
                    }
                    echo '</ul>';
                }
            }

        }
    }

    /**
     * @param $diagrams
     */
    private function renderDiagrams($diagrams)
    {
        echo "
        <div class='clearBoth'></div>
        <hr>
        <h2>UML диаграммы:</h2>";
        foreach ($diagrams as $file => $string) {
            echo "<img src='$string'>";
        }
        echo "
        </div>";
    }

    private function renderUnitTests($unitTests)
    {
        echo "
        <div class='clearBoth'></div>
        <hr>
        <h2>Блочные тесты:</h2>
        <div>";
        foreach ($unitTests as $file => $string) {
            echo '<div class="class">';
            echo "<h3>$file</h3>";
            echo '<pre>';
            echo(htmlspecialchars($string));
            echo '</pre>';
            echo '</div>';
        }
        echo "
        </div>";
    }

    /**
     * Render list of inputs file
     * @param $filesForExample
     */
    private function renderExampleFiles($filesForExample)
    {
        echo "
        <hr>
        <h2>Входные файлы:</h2>
        <div>";
        foreach ($filesForExample as $name => $string) {
            echo '<div class="file">';
            echo "<h3>$name</h3>";
            echo '<pre>';
            echo(htmlspecialchars($string));
            echo '</pre>';
            echo '</div>';
        }
        echo "
        </div>";
    }

    /**
     * Render list of result files
     * @param $files
     */
    private function renderResultFiles($files)
    {
        echo "
        <div class='clearBoth'></div>
        <hr>
        <h2>Результаты:</h2>
        <div>";
        foreach ($files as $title => $string) {
            echo '<div class="file">';
            echo "<h2>$title</h2>";
            echo '<pre>';
            print_r($string);
            echo '</pre>';
            echo "</div>";
        }
        echo "
        </div>";
    }

    /**
     * Render list of classes
     * @param $classes
     */
    private function renderClasses($classes)
    {
        echo "
        <div class='clearBoth'></div>
        <hr>
        <h2>Классы:</h2>
        <div>";
        foreach ($classes as $file => $string) {
            echo '<div class="class">';
            echo "<h3>$file</h3>";
            echo '<pre>';
            echo(htmlspecialchars($string));
            echo '</pre>';
            echo '</div>';
        }
        echo "
        </div>";
    }

    /**
     * Render result objects
     * @param $object
     */
    protected function renderObject($object)
    {
        echo "
        <div class='clearBoth'></div>
        <hr>
        <h2>Объект который получился в конце:</h2>
        <div>";
        foreach ($object as &$item) {
            echo '<div class="file">';
            echo '<pre>';
            print_r($item);
            echo '</pre>';
            echo '</div>';
        }
        echo "
        </div>
        ";
    }
}