function tenMostFrequentWords(str) {
    if (!str) return [];


    const words = str.toLowerCase().match(/\b\w+\b/g);
    if (!words) return [];

    
    const freqMap = {};
    words.forEach(word => {
        freqMap[word] = (freqMap[word] || 0) + 1;
    });

   
    const sortedWords = Object.keys(freqMap).sort((a, b) => freqMap[b] - freqMap[a]);

   
    return sortedWords.slice(0, 10).map(word => `${word} (${freqMap[word]})`);
}

function showTopWords() {
    const text = document.getElementById("textInput").value.trim();
    if (!text) {
        document.getElementById("result").textContent = "Please enter some text.";
        return;
    }

    const topWords = tenMostFrequentWords(text);
    document.getElementById("result").textContent = topWords.length
        ? "Top 10 most frequent words:\n" + topWords.join("\n")
        : "No words found in the text.";
}
