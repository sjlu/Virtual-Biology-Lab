/**
 * Adobe Edge: symbol definitions
 */
(function($, Edge, compId){
var symbols = {
"stage": {
   version: "0.1.3",
   baseState: "Base State",
   initialState: "Base State",
   content: {
      dom: [
],
      symbolInstances: [
      ]
   },
   states: {
      "Base State": {
         "${_stage}": [
            ["style", "height", '400px'],
            ["color", "background-color", 'rgba(255,255,255,1)'],
            ["style", "width", '550px']
         ]
      }
   },
   timelines: {
      "Default Timeline": {
         fromState: "Base State",
         toState: "",
         duration: 0,
         labels: {

         },
         timeline: [
]
      }
   }
}};

var comp;
Edge.registerCompositionDefn(compId, symbols);

/**
 * Adobe Edge DOM Ready Event Handler
 */
$(window).ready(function() {
     comp = new Edge.Composition(compId, {stage: "." + compId}, {});
	   /**
 * Adobe Edge Timeline Launch
 */
     comp.ready(function() {
         comp.play();
     });
});
})(jQuery, jQuery.Edge, "EDGE-204549347");
