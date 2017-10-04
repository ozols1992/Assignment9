<?php
/* 
 * This is a VIEW
 */
require_once './includes/TelevisionI.inc.php';
require_once './includes/Television.inc.php';

class TelevisionV1 {
    private $model;

    public function __construct(Television $model) {
        $this->model = $model;
    }
    
    private function remote() {
        $s = sprintf("<div class='remote'>\n
                      <form action='%s' method='post'>
                        <p>
                        <button type='submit' name='on'>On/Off</button>
                        </p>
                        <p>
                        <button type='submit' name='volup'>Volume Up</button>
                        <button type='submit' name='chup'>Channel Up</button>
                        </p>
                        <p>
                        <button type='submit' name='voldown'>Volume Down</button>
                        <button type='submit' name='chdown'>Channel Down</button>
                        </p>
                        <p>
                        <button type='submit' name='mute'>Mute</button>
                        </p>
                      </form>
                      </div>
                      \n"
                    , $_SERVER['PHP_SELF']);
        return $s;
    }

    private function osd() {
        $ooState = $this->model->getTvOnOff() ? 'On' : 'Off';
        $muted = $this->model->getMute() ? 'True' : 'False';
        $s = sprintf("<div class='state'>
                        <p>On/Off: %s
                          <br/>Channel: %s
                          <br/>Volume: %s
                          <br/>Muted: %s
                        </p>
                      </div>\n"
                   , $ooState
                   , $this->model->getChannel()
                   , $this->model->getVolume()
                   , $muted);
        return $s;
    }

    private function mainElm() {
        $s = "<video controls>\n";
        foreach ($this->model->getMedia() as $medio) {
            $s .= sprintf("<source src='%s' type='%s'/>\n"
                      , $medio->getUrl(), $medio->getMimeType());
        }
        $s .= "</video>\n";
        return $s;
    }

    public function display0() {
        $s = sprintf("<nav class='nav'>\n%s\n%s\n</nav>\n"
          , $this->osd(), $this->remote());
        $s .= sprintf("<main class='main'>\n%s\n</main>\n"
          , $this->mainElm());
        return $s;
    }
    
}