<?php

/* WebProfilerBundle:Collector:time.html.twig */
class __TwigTemplate_6ce2c840fa78789b0579ffe6e9c5d2b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'panelContent' => array($this, 'block_panelContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        if ((!array_key_exists("colors", $context))) {
            // line 4
            $context["colors"] = array("default" => "#aacd4e", "section" => "#666", "event_listener" => "#3dd", "event_listener_loading" => "#add", "template" => "#dd3", "doctrine" => "#d3d", "propel" => "#f4d", "child_sections" => "#eed");
        }
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_toolbar($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        $context["total_time"] = ((twig_length_filter($this->env, $this->getAttribute($_collector_, "events"))) ? (sprintf("%.0f ms", $this->getAttribute($_collector_, "totaltime"))) : ("n/a"));
        // line 18
        echo "    ";
        ob_start();
        // line 19
        echo "        <img width=\"16\" height=\"28\" alt=\"Time\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAcCAYAAABoMT8aAAABqUlEQVR42t2Vv0sCYRyHX9OmEhsMx/YKGlwLQ69DTEUSBJEQEy5J3FRc/BsuiFqEIIcQIRo6ysUhoaBBWhoaGoJwiMJLglRKrs8bXgienmkQdPDAwX2f57j3fhFJkkbiPwTK5bIiFoul3kmPud8MqKMewDXpwuGww+12n9hsNhFnlijYf/Z4PDmO45Yxo+10ZFGTyWRMEItU6AdCx7lczkgd6n7J2Wx2xm63P6jJMk6n80YQBBN1aUDv9XqvlAbbm2LE7/cLODRB0un0VveAeoDC8/waCQQC18MGQqHQOcEKvw8bcLlcL6TfYnVtCrGRAlartUUYhmn1jKg/E3USjUYfhw3E4/F7ks/nz4YNFIvFQ/ogbUYikdefyqlU6gnuOg2YK5XKvs/n+xhUDgaDTVEUt+HO04ABOBA5isViDTU5kUi81Wq1AzhWMEkDGmAEq2C3UCjcYXGauDvfEsuyUjKZbJRKpVvM8IABU9SVX+cxYABmwIE9cFqtVi9xtgvsC2AHbIAFoKey0gdlHEyDObAEWLACFsEsMALdIJ80+dK0bTS95v7+v/AJnis0eO906QwAAAAASUVORK5CYII=\"/>
        <span>";
        // line 20
        if (isset($context["total_time"])) { $_total_time_ = $context["total_time"]; } else { $_total_time_ = null; }
        echo twig_escape_filter($this->env, $_total_time_, "html", null, true);
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 22
        echo "    ";
        ob_start();
        // line 23
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>";
        // line 25
        if (isset($context["total_time"])) { $_total_time_ = $context["total_time"]; } else { $_total_time_ = null; }
        echo twig_escape_filter($this->env, $_total_time_, "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 28
        echo "    ";
        if (isset($context["profiler_url"])) { $_profiler_url_ = $context["profiler_url"]; } else { $_profiler_url_ = null; }
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => $_profiler_url_)));
    }

    // line 31
    public function block_menu($context, array $blocks = array())
    {
        // line 32
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/time.png"), "html", null, true);
        echo "\" alt=\"Timeline\" /></span>
    <strong>Timeline</strong>
</span>
";
    }

    // line 38
    public function block_panel($context, array $blocks = array())
    {
        // line 39
        echo "    <h2>Timeline</h2>
    ";
        // line 40
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_collector_, "events"))) {
            // line 41
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        } else {
            // line 43
            echo "        <p>
            <em>No timing events have been recorded. Are you sure that debugging is enabled in the kernel ?</em>
        </p>
    ";
        }
    }

    // line 49
    public function block_panelContent($context, array $blocks = array())
    {
        // line 50
        echo "    <form id=\"timeline-control\" action=\"\" method=\"get\">
        <input type=\"hidden\" name=\"panel\" value=\"time\" />
        <table>
            <tr>
                <th style=\"width: 20%\">Total time</th>
                <td>";
        // line 55
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, sprintf("%.0f", $this->getAttribute($_collector_, "totaltime")), "html", null, true);
        echo " ms</td>
            </tr>
            <tr>
                <th>Initialization time</th>
                <td>";
        // line 59
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, sprintf("%.0f", $this->getAttribute($_collector_, "inittime")), "html", null, true);
        echo " ms</td>
            </tr>
            <tr>
                <th>Threshold</th>
                <td><input type=\"number\" size=\"3\" name=\"threshold\" value=\"1\" min=\"0\" /> ms</td>
            </tr>
        </table>
    </form>

    <h3>
        ";
        // line 69
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        echo (($this->getAttribute($_profile_, "parent")) ? ("Request") : ("Main Request"));
        echo "
        <small>
            - ";
        // line 71
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_collector_, "events"), "__section__"), "totaltime"), "html", null, true);
        echo " ms
            ";
        // line 72
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if ($this->getAttribute($_profile_, "parent")) {
            // line 73
            echo "                - <a href=\"";
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($this->getAttribute($_profile_, "parent"), "token"), "panel" => "time")), "html", null, true);
            echo "\">parent</a>
            ";
        }
        // line 75
        echo "        </small>
    </h3>

    ";
        // line 78
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        $context["max"] = $this->getAttribute($this->getAttribute($this->getAttribute($_collector_, "events"), "__section__"), "endtime");
        // line 79
        echo "
    ";
        // line 80
        if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (isset($context["colors"])) { $_colors_ = $context["colors"]; } else { $_colors_ = null; }
        echo $this->getAttribute($this, "display_timeline", array(0 => ("timeline_" . $_token_), 1 => $this->getAttribute($_collector_, "events"), 2 => $_colors_), "method");
        echo "

    ";
        // line 82
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_profile_, "children"))) {
            // line 83
            echo "        ";
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_profile_, "children"));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 84
                echo "            ";
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                $context["events"] = $this->getAttribute($this->getAttribute($_child_, "getcollector", array(0 => "time"), "method"), "events");
                // line 85
                echo "            <h3>
                Sub-request \"<a href=\"";
                // line 86
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($_child_, "token"), "panel" => "time")), "html", null, true);
                echo "\">";
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_child_, "getcollector", array(0 => "request"), "method"), "requestattributes"), "get", array(0 => "_controller"), "method"), "html", null, true);
                echo "</a>\"
                <small> - ";
                // line 87
                if (isset($context["events"])) { $_events_ = $context["events"]; } else { $_events_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_events_, "__section__"), "totaltime"), "html", null, true);
                echo " ms</small>
            </h3>

            ";
                // line 90
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                if (isset($context["events"])) { $_events_ = $context["events"]; } else { $_events_ = null; }
                if (isset($context["colors"])) { $_colors_ = $context["colors"]; } else { $_colors_ = null; }
                echo $this->getAttribute($this, "display_timeline", array(0 => ("timeline_" . $this->getAttribute($_child_, "token")), 1 => $_events_, 2 => $_colors_), "method");
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 92
            echo "    ";
        }
        // line 93
        echo "
    <script type=\"text/javascript\">//<![CDATA[
        /**
         * In-memory key-value cache manager
         */
        var cache = new function() {
            \"use strict\";
            var dict = {};

            this.get = function(key) {
                return dict.hasOwnProperty(key)
                    ? dict[key]
                    : null;
                }

            this.set = function(key, value) {
                dict[key] = value;

                return value;
            }
        };

        /**
         * Query an element with a CSS selector.
         *
         * @param  string selector a CSS-selector-compatible query string.
         *
         * @return DOMElement|null
         */
        function query(selector)
        {
            \"use strict\";
            var key = 'SELECTOR: ' + selector;

            return cache.get(key) || cache.set(key, document.querySelector(selector));
        }

        /**
         * Canvas Manager
         */
        function CanvasManager(requests, maxRequestTime) {
            \"use strict\";

            var _drawingColors  = ";
        // line 136
        if (isset($context["colors"])) { $_colors_ = $context["colors"]; } else { $_colors_ = null; }
        echo twig_jsonencode_filter($_colors_);
        echo ",
                _storagePrefix  = 'sf2/profiler/timeline',
                _threshold      = 1,
                _requests       = requests,
                _maxRequestTime = maxRequestTime;

            /**
             * Check whether this event is a child event.
             *
             * @return true if it is.
             */
            function isChildEvent(event)
            {
                return '__section__.child' === event.name;
            }

            /**
             * Check whether this event is categorized in 'section'.
             *
             * @return true if it is.
             */
            function isSectionEvent(event)
            {
                return 'section' === event.category;
            }

            /**
             * Get the width of the container.
             */
            function getContainerWidth()
            {
                return query('#collector_content h2').clientWidth;
            }

            /**
             * Draw one canvas.
             *
             * @param request   the request object
             * @param max       <subjected for removal>
             * @param threshold the threshold (lower bound) of the length of the timeline (in miliseconds).
             * @param width     the width of the canvas.
             */
            this.drawOne = function(request, max, threshold, width)
            {
                \"use strict\";
                var text,
                    ms,
                    xc,
                    drawableEvents,
                    mainEvents,
                    elementId    = 'timeline_' + request.id,
                    canvasHeight = 0,
                    gapPerEvent  = 38,
                    colors = _drawingColors,
                    space  = 10.5,
                    ratio  = (width - space * 2) / max,
                    h = space,
                    x = request.left * ratio + space, // position
                    canvas = cache.get(elementId) || cache.set(elementId, document.getElementById(elementId)),
                    ctx    = canvas.getContext(\"2d\");

                // Filter events whose total time is below the threshold.
                drawableEvents = request.events.filter(function(event) {
                    return event.totaltime >= threshold;
                });

                canvasHeight += gapPerEvent * drawableEvents.length;

                canvas.width  = width;
                canvas.height = canvasHeight;

                ctx.textBaseline = \"middle\";
                ctx.lineWidth = 0;

                // For each event, draw a line.
                ctx.strokeStyle = \"#dfdfdf\";

                drawableEvents.forEach(function(event) {
                    event.periods.forEach(function(period) {
                        var timelineHeadPosition = x + period.begin * ratio;

                        if (isChildEvent(event)) {
                            ctx.fillStyle = colors.child_sections;
                            ctx.fillRect(timelineHeadPosition, 0, (period.end - period.begin) * ratio, canvasHeight);
                        } else if (isSectionEvent(event)) {
                            var timelineTailPosition = x + period.end * ratio;

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, 0);
                            ctx.lineTo(timelineHeadPosition, canvasHeight);
                            ctx.moveTo(timelineTailPosition, 0);
                            ctx.lineTo(timelineTailPosition, canvasHeight);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();
                        }
                    });
                });

                // Filter for main events.
                mainEvents = drawableEvents.filter(function(event) {
                    return ! isChildEvent(event)
                });

                // For each main event, draw the visual presentation of timelines.
                mainEvents.forEach(function(event) {

                    h += 8;

                    // For each sub event, ...
                    event.periods.forEach(function(period) {
                        // Set the drawing style.
                        ctx.fillStyle   = colors['default'];
                        ctx.strokeStyle = colors['default'];

                        if (colors[event.name]) {
                            ctx.fillStyle   = colors[event.name];
                            ctx.strokeStyle = colors[event.name];
                        } else if (colors[event.category]) {
                            ctx.fillStyle   = colors[event.category];
                            ctx.strokeStyle = colors[event.category];
                        }

                        // Draw the timeline
                        var timelineHeadPosition = x + period.begin * ratio;

                        if ( ! isSectionEvent(event)) {
                            ctx.fillRect(timelineHeadPosition, h + 3, 2, 6);
                            ctx.fillRect(timelineHeadPosition, h, (period.end - period.begin) * ratio || 2, 6);
                        } else {
                            var timelineTailPosition = x + period.end * ratio;

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, h);
                            ctx.lineTo(timelineHeadPosition, h + 11);
                            ctx.lineTo(timelineHeadPosition + 8, h);
                            ctx.lineTo(timelineHeadPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();

                            ctx.beginPath();
                            ctx.moveTo(timelineTailPosition, h);
                            ctx.lineTo(timelineTailPosition, h + 11);
                            ctx.lineTo(timelineTailPosition - 8, h);
                            ctx.lineTo(timelineTailPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, h);
                            ctx.lineTo(timelineTailPosition, h);
                            ctx.lineTo(timelineTailPosition, h + 2);
                            ctx.lineTo(timelineHeadPosition, h + 2);
                            ctx.lineTo(timelineHeadPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();
                        }
                    });

                    h += 30;

                    ctx.beginPath();
                    ctx.strokeStyle = \"#dfdfdf\";
                    ctx.moveTo(0, h - 10);
                    ctx.lineTo(width, h - 10);
                    ctx.closePath();
                    ctx.stroke();
                });

                h = space;

                // For each event, draw the label.
                mainEvents.forEach(function(event) {

                    ctx.fillStyle = \"#444\";
                    ctx.font = \"12px sans-serif\";
                    text = event.name;
                    ms = \" ~ \" + (event.totaltime < 1 ? event.totaltime : parseInt(event.totaltime, 10)) + \" ms\";
                    if (x + event.starttime * ratio + ctx.measureText(text + ms).width > width) {
                        ctx.textAlign = \"end\";
                        ctx.font = \"10px sans-serif\";
                        xc = x + event.endtime * ratio - 1;
                        ctx.fillText(ms, xc, h);

                        xc -= ctx.measureText(ms).width;
                        ctx.font = \"12px sans-serif\";
                        ctx.fillText(text, xc, h);
                    } else {
                        ctx.textAlign = \"start\";
                        ctx.font = \"12px sans-serif\";
                        xc = x + event.starttime * ratio + 1;
                        ctx.fillText(text, xc, h);

                        xc += ctx.measureText(text).width;
                        ctx.font = \"10px sans-serif\";
                        ctx.fillText(ms, xc, h);
                    }

                    h += gapPerEvent;
                });
            };

            this.drawAll = function(width, threshold)
            {
                \"use strict\";

                width     = width || getContainerWidth();
                threshold = threshold || this.getThreshold();

                var self = this;

                _requests.forEach(function(request) {
                    self.drawOne(request, maxRequestTime, threshold, width);
                });
            };

            this.getThreshold = function() {
                var threshold = localStorage.getItem(_storagePrefix + '/threshold');

                if (threshold === null) {
                    return _threshold;
                }

                _threshold = parseInt(threshold);

                return _threshold;
            };

            this.setThreshold = function(threshold)
            {
                _threshold = threshold;

                localStorage.setItem(_storagePrefix + '/threshold', threshold);

                return this;
            };
        };

        function canvasAutoUpdateOnResizeAndSubmit(e) {
            e.preventDefault();
            canvasManager.drawAll();
        }

        function canvasAutoUpdateOnThresholdChange(e) {
            canvasManager
                .setThreshold(query('input[name=\"threshold\"]').value)
                .drawAll();
        }

        var requests_data = {
            \"max\": ";
        // line 389
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($this->getAttribute($this->getAttribute($_collector_, "events"), "__section__"), "endtime")), "html", null, true);
        echo ",
            \"requests\": [
";
        // line 391
        if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo $this->getAttribute($this, "dump_request_data", array(0 => $_token_, 1 => $_profile_, 2 => $this->getAttribute($_collector_, "events"), 3 => $this->getAttribute($this->getAttribute($this->getAttribute($_collector_, "events"), "__section__"), "origin")), "method");
        echo "

";
        // line 393
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_profile_, "children"))) {
            // line 394
            echo "                ,
";
            // line 395
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_profile_, "children"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 396
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
                echo $this->getAttribute($this, "dump_request_data", array(0 => $this->getAttribute($_child_, "token"), 1 => $_child_, 2 => $this->getAttribute($this->getAttribute($_child_, "getcollector", array(0 => "time"), "method"), "events"), 3 => $this->getAttribute($this->getAttribute($this->getAttribute($_collector_, "events"), "__section__"), "origin")), "method");
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                echo (($this->getAttribute($_loop_, "last")) ? ("") : (","));
                echo "
";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        }
        // line 399
        echo "            ]
        };

        var canvasManager = new CanvasManager(requests_data.requests, requests_data.max);

        query('input[name=\"threshold\"]').value = canvasManager.getThreshold();
        canvasManager.drawAll();

        // Update the colors of legends.
        var timelineLegends = document.querySelectorAll('.sf-profiler-timeline > .legends > span[data-color]');

        for (var i = 0; i < timelineLegends.length; ++i) {
            var timelineLegend = timelineLegends[i];

            timelineLegend.style.borderLeftColor = timelineLegend.getAttribute('data-color');
        }

        // Bind event handlers
        var elementTimelineControl  = query('#timeline-control'),
            elementThresholdControl = query('input[name=\"threshold\"]');

        window.onresize                 = canvasAutoUpdateOnResizeAndSubmit;
        elementTimelineControl.onsubmit = canvasAutoUpdateOnResizeAndSubmit;

        elementThresholdControl.onclick  = canvasAutoUpdateOnThresholdChange;
        elementThresholdControl.onchange = canvasAutoUpdateOnThresholdChange;
        elementThresholdControl.onkeyup  = canvasAutoUpdateOnThresholdChange;
    //]]></script>
";
    }

    // line 429
    public function getdump_request_data($token = null, $profile = null, $events = null, $origin = null)
    {
        $context = $this->env->mergeGlobals(array(
            "token" => $token,
            "profile" => $profile,
            "events" => $events,
            "origin" => $origin,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 430
            echo "                {
                    \"id\": \"";
            // line 431
            if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
            echo twig_escape_filter($this->env, $_token_, "html", null, true);
            echo "\",
                    \"left\": ";
            // line 432
            if (isset($context["events"])) { $_events_ = $context["events"]; } else { $_events_ = null; }
            if (isset($context["origin"])) { $_origin_ = $context["origin"]; } else { $_origin_ = null; }
            echo twig_escape_filter($this->env, sprintf("%F", ($this->getAttribute($this->getAttribute($_events_, "__section__"), "origin") - $_origin_)), "html", null, true);
            echo ",
                    \"events\": [
";
            // line 434
            if (isset($context["events"])) { $_events_ = $context["events"]; } else { $_events_ = null; }
            echo $this->getAttribute($this, "dump_events", array(0 => $_events_), "method");
            echo "
                    ]
                }
";
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    // line 439
    public function getdump_events($events = null)
    {
        $context = $this->env->mergeGlobals(array(
            "events" => $events,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 440
            if (isset($context["events"])) { $_events_ = $context["events"]; } else { $_events_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_events_);
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["name"] => $context["event"]) {
                // line 441
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                if (("__section__" != $_name_)) {
                    // line 442
                    echo "                        {
                            \"name\": \"";
                    // line 443
                    if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                    echo twig_escape_filter($this->env, $_name_, "html", null, true);
                    echo "\",
                            \"category\": \"";
                    // line 444
                    if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_event_, "category"), "html", null, true);
                    echo "\",
                            \"origin\": ";
                    // line 445
                    if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($_event_, "origin")), "html", null, true);
                    echo ",
                            \"starttime\": ";
                    // line 446
                    if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($_event_, "starttime")), "html", null, true);
                    echo ",
                            \"endtime\": ";
                    // line 447
                    if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($_event_, "endtime")), "html", null, true);
                    echo ",
                            \"totaltime\": ";
                    // line 448
                    if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($_event_, "totaltime")), "html", null, true);
                    echo ",
                            \"periods\": [";
                    // line 450
                    if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_event_, "periods"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["period"]) {
                        // line 451
                        echo "{\"begin\": ";
                        if (isset($context["period"])) { $_period_ = $context["period"]; } else { $_period_ = null; }
                        echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($_period_, 0)), "html", null, true);
                        echo ", \"end\": ";
                        if (isset($context["period"])) { $_period_ = $context["period"]; } else { $_period_ = null; }
                        echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($_period_, 1)), "html", null, true);
                        echo "}";
                        if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                        echo (($this->getAttribute($_loop_, "last")) ? ("") : (", "));
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['period'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 453
                    echo "]
                        }";
                    // line 454
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    echo (($this->getAttribute($_loop_, "last")) ? ("") : (","));
                    echo "
";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    // line 459
    public function getdisplay_timeline($id = null, $events = null, $colors = null)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $id,
            "events" => $events,
            "colors" => $colors,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 460
            echo "    <div class=\"sf-profiler-timeline\">
        <div class=\"legends\">
            ";
            // line 462
            if (isset($context["colors"])) { $_colors_ = $context["colors"]; } else { $_colors_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_colors_);
            foreach ($context['_seq'] as $context["category"] => $context["color"]) {
                // line 463
                echo "                <span data-color=\"";
                if (isset($context["color"])) { $_color_ = $context["color"]; } else { $_color_ = null; }
                echo twig_escape_filter($this->env, $_color_, "html", null, true);
                echo "\">";
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                echo twig_escape_filter($this->env, $_category_, "html", null, true);
                echo "</span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['category'], $context['color'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 465
            echo "        </div>
        <canvas width=\"680\" height=\"\" id=\"";
            // line 466
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "\" class=\"timeline\"></canvas>
    </div>
";
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  838 => 466,  835 => 465,  822 => 463,  817 => 462,  813 => 460,  800 => 459,  773 => 454,  770 => 453,  748 => 451,  730 => 450,  725 => 448,  720 => 447,  715 => 446,  710 => 445,  705 => 444,  700 => 443,  697 => 442,  694 => 441,  676 => 440,  665 => 439,  649 => 434,  642 => 432,  637 => 431,  634 => 430,  620 => 429,  588 => 399,  567 => 396,  549 => 395,  546 => 394,  543 => 393,  535 => 391,  529 => 389,  272 => 136,  191 => 84,  185 => 83,  228 => 71,  206 => 87,  203 => 68,  188 => 67,  184 => 66,  180 => 64,  176 => 63,  159 => 58,  133 => 52,  127 => 51,  114 => 42,  76 => 32,  101 => 33,  75 => 23,  18 => 1,  96 => 41,  276 => 248,  262 => 236,  259 => 235,  239 => 219,  236 => 218,  66 => 23,  53 => 22,  125 => 40,  120 => 55,  70 => 22,  144 => 40,  141 => 39,  110 => 49,  94 => 30,  51 => 14,  21 => 3,  331 => 100,  325 => 96,  322 => 95,  318 => 94,  315 => 93,  310 => 90,  304 => 86,  301 => 85,  297 => 84,  294 => 83,  289 => 80,  275 => 79,  271 => 77,  256 => 234,  246 => 73,  243 => 72,  237 => 70,  232 => 69,  224 => 92,  214 => 62,  200 => 61,  197 => 60,  190 => 58,  169 => 56,  154 => 50,  136 => 53,  132 => 47,  129 => 46,  121 => 42,  80 => 24,  59 => 22,  74 => 24,  139 => 45,  124 => 50,  109 => 34,  84 => 33,  81 => 24,  73 => 31,  69 => 24,  62 => 11,  41 => 18,  34 => 16,  95 => 30,  90 => 39,  87 => 38,  83 => 23,  26 => 3,  45 => 13,  22 => 4,  48 => 7,  25 => 3,  248 => 96,  238 => 90,  234 => 88,  227 => 93,  223 => 83,  218 => 63,  216 => 79,  213 => 90,  210 => 70,  207 => 76,  198 => 86,  192 => 67,  177 => 61,  171 => 79,  164 => 55,  160 => 51,  155 => 51,  153 => 72,  149 => 47,  143 => 46,  137 => 45,  126 => 43,  116 => 28,  107 => 39,  82 => 26,  67 => 28,  112 => 37,  102 => 43,  63 => 18,  56 => 23,  38 => 7,  32 => 8,  23 => 3,  17 => 1,  92 => 35,  86 => 39,  77 => 27,  29 => 4,  24 => 11,  19 => 1,  61 => 19,  58 => 15,  46 => 14,  44 => 19,  37 => 17,  20 => 2,  182 => 82,  174 => 80,  170 => 49,  167 => 48,  163 => 75,  157 => 45,  146 => 47,  135 => 41,  123 => 24,  118 => 41,  115 => 37,  113 => 50,  108 => 20,  105 => 35,  99 => 34,  88 => 41,  85 => 29,  78 => 25,  65 => 12,  55 => 10,  52 => 16,  49 => 37,  42 => 11,  40 => 8,  36 => 7,  33 => 6,  30 => 5,  27 => 3,  201 => 72,  195 => 85,  187 => 62,  181 => 63,  178 => 57,  172 => 57,  168 => 78,  165 => 62,  156 => 73,  151 => 45,  148 => 71,  145 => 61,  142 => 69,  134 => 31,  131 => 30,  128 => 59,  122 => 30,  119 => 29,  111 => 41,  106 => 33,  103 => 47,  100 => 27,  97 => 36,  93 => 40,  89 => 31,  79 => 33,  68 => 25,  64 => 23,  60 => 25,  57 => 16,  54 => 39,  50 => 10,  47 => 20,  43 => 8,  39 => 10,  35 => 6,  31 => 6,  28 => 4,);
    }
}
