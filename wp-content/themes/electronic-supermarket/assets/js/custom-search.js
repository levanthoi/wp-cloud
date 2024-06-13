document.addEventListener("DOMContentLoaded", function () {
    const voiceButton = document.getElementById("voice-search-button");
    const searchField = document.getElementById("woocommerce-product-search-field");

    console.log("Voice Button:", voiceButton);
    console.log("Search Field:", searchField);

    if (!voiceButton || !searchField) {
        console.error("Voice button or search field not found in the DOM");
        return;
    }

    const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
    const SpeechGrammarList = window.SpeechGrammarList || window.webkitSpeechGrammarList;

    if (!SpeechRecognition || !SpeechGrammarList) {
        console.error("Web Speech API is not supported in this browser");
        return;
    }

    const grammar = "#JSGF V1.0;";
    const recognition = new SpeechRecognition();
    const speechRecognitionList = new SpeechGrammarList();
    speechRecognitionList.addFromString(grammar, 1);

    recognition.grammars = speechRecognitionList;
    recognition.lang = "vi-VN";
    recognition.interimResults = false;

    recognition.onstart = function () {
        console.log("Voice recognition started. Try speaking into the microphone.");
    };

    recognition.onspeechend = function () {
        console.log("Speech recognition has stopped.");
        recognition.stop();
    };

    recognition.onerror = function (event) {
        console.error("Speech recognition error:", event.error);
    };

    recognition.onresult = function (event) {
        console.log("Speech recognition result received:", event);
        const transcript = event.results[0][0].transcript;
        console.log("Transcript:", transcript);
        searchField.value = transcript;
    };

    voiceButton.addEventListener("click", function () {
        console.log("Voice button clicked");
        recognition.start();
    });
});
