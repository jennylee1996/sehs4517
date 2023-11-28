function change_QuestionTC() {
    let Q = document.getElementById("store").value;
    if (Q == "GAD-7") {
        //get Element id change word
        document.getElementById("QDescription").innerHTML =
            "GAD-7 問題用於測試及評估<b style='font-size:22.5px;'>焦慮</b>程度";
        document.getElementById("q2").innerHTML = "無法停止或控制憂慮";
        document.getElementById("q3").innerHTML = "過份憂慮不同的事情";
        document.getElementById("q4").innerHTML = "難以放鬆";
        document.getElementById("q5").innerHTML = "心緒不寧以至坐立不安";
        document.getElementById("q6").innerHTML = "容易心煩或易怒";
        document.getElementById("q7").innerHTML =
            "感到害怕，就像要發生可怕的事情";
        document.getElementById("q8").remove();
        document.getElementById("q9").remove();
    } else if (Q == "PHQ-9") {
        //get Element id change word
        document.getElementById("QDescription").innerHTML =
            "PHQ-9 問題用於測試及評估<b style='font-size:22.5px;'>抑鬱</b>程度";

        document.getElementById("q2").innerHTML = "情緒低落、抑鬱或絕望";
        document.getElementById("q3").innerHTML =
            "難於入睡；半夜會醒或相反地睡覺時間過多";
        document.getElementById("q4").innerHTML = "覺得疲倦或活力不足";
        document.getElementById("q5").innerHTML = "胃口極差或進食過量";
        document.getElementById("q6").innerHTML =
            "不喜歡自己──覺得自己做得不好、對自己失望或有負家人期望";
        document.getElementById("q7").innerHTML =
            "難於集中精神做事，例如看報紙或看電視";
        //add q8 into form
        // find "tableContent"
        let tableContent = document.getElementById("tableContent");

        // establish tr
        let trElement = document.createElement("tr");
        trElement.setAttribute("id", "q8");

        // establish th
        let thElement = document.createElement("th");
        thElement.setAttribute("scope", "row");

        thElement.textContent =
            "其他人反映你行動或說話遲緩；或者相反地，你比平常活動更多──坐立不安、停不下來";
        // add th into  tr
        trElement.appendChild(thElement);

        // add no.1 radio
        var tdElement1 = document.createElement("td");
        var inputElement1 = document.createElement("input");
        inputElement1.setAttribute("type", "radio");
        inputElement1.setAttribute("name", "q8");
        inputElement1.setAttribute("value", "0");
        inputElement1.setAttribute("required", "true");
        tdElement1.appendChild(inputElement1);
        trElement.appendChild(tdElement1);

        // add no.2 radio
        var tdElement2 = document.createElement("td");
        var inputElement2 = document.createElement("input");
        inputElement2.setAttribute("type", "radio");
        inputElement2.setAttribute("name", "q8");
        inputElement2.setAttribute("value", "3");
        inputElement2.setAttribute("required", "true");
        tdElement2.appendChild(inputElement2);
        trElement.appendChild(tdElement2);

        // add no.3 radio
        var tdElement3 = document.createElement("td");
        var inputElement3 = document.createElement("input");
        inputElement3.setAttribute("type", "radio");
        inputElement3.setAttribute("name", "q8");
        inputElement3.setAttribute("value", "5");
        inputElement3.setAttribute("required", "true");
        tdElement3.appendChild(inputElement3);
        trElement.appendChild(tdElement3);

        // add no.4 radio
        var tdElement4 = document.createElement("td");
        var inputElement4 = document.createElement("input");
        inputElement4.setAttribute("type", "radio");
        inputElement4.setAttribute("name", "q8");
        inputElement4.setAttribute("value", "7");
        inputElement4.setAttribute("required", "true");
        tdElement4.appendChild(inputElement4);
        trElement.appendChild(tdElement4);

        // add tr into id = tableContent
        tableContent.appendChild(trElement);

        //add q9 into form

        // establish tr
        let trElement9 = document.createElement("tr");
        trElement9.setAttribute("id", "q9");

        // establish th
        let thElement9 = document.createElement("th");
        thElement9.setAttribute("scope", "row");

        thElement9.textContent = "想到自己最好去死或者自殘";
        // add th into  tr
        trElement9.appendChild(thElement9);

        // add no.1 radio
        var tdElement91 = document.createElement("td");
        var inputElement91 = document.createElement("input");
        inputElement91.setAttribute("type", "radio");
        inputElement91.setAttribute("name", "q9");
        inputElement91.setAttribute("value", "0");
        inputElement91.setAttribute("required", "true");
        tdElement91.appendChild(inputElement91);
        trElement9.appendChild(tdElement91);

        // add no.2 radio
        var tdElement92 = document.createElement("td");
        var inputElement92 = document.createElement("input");
        inputElement92.setAttribute("type", "radio");
        inputElement92.setAttribute("name", "q9");
        inputElement92.setAttribute("value", "3");
        inputElement92.setAttribute("required", "true");
        tdElement92.appendChild(inputElement92);
        trElement9.appendChild(tdElement92);

        // add no.3 radio
        var tdElement93 = document.createElement("td");
        var inputElement93 = document.createElement("input");
        inputElement93.setAttribute("type", "radio");
        inputElement93.setAttribute("name", "q9");
        inputElement93.setAttribute("value", "5");
        inputElement93.setAttribute("required", "true");
        tdElement93.appendChild(inputElement93);
        trElement9.appendChild(tdElement93);

        // add no.4 radio
        var tdElement94 = document.createElement("td");
        var inputElement94 = document.createElement("input");
        inputElement94.setAttribute("type", "radio");
        inputElement94.setAttribute("name", "q9");
        inputElement94.setAttribute("value", "7");
        inputElement94.setAttribute("required", "true");
        tdElement94.appendChild(inputElement94);
        trElement9.appendChild(tdElement94);

        // add tr into id = tableContent
        tableContent.appendChild(trElement9);
    }
}

function change_QuestionEN() {
    let Q = document.getElementById("store").value;
    if (Q == "GAD-7") {
        document.getElementById("QDescription").innerHTML =
            "GAD-7 questions are used to test and assess <b style='font-size:22.5px;'>anxiety</b>levels";
        document.getElementById("q2").innerHTML =
            "Inability to stop or control worry";
        document.getElementById("q3").innerHTML =
            "Worrying too much about different things";
        document.getElementById("q4").innerHTML = "difficult to relax";
        document.getElementById("q5").innerHTML =
            "Feeling restless and restless";
        document.getElementById("q6").innerHTML = "Easily upset or irritable";
        document.getElementById("q7").innerHTML =
            "Feeling scared, like something terrible is going to happen";
        document.getElementById("q8").remove();
        document.getElementById("q9").remove();
    } else if (Q == "PHQ-9") {
        document.getElementById("QDescription").innerHTML =
            "PHQ-9 questions are used to test and assess<b style='font-size:22.5px;'>depression</b>levels";

        document.getElementById("q2").innerHTML =
            "Feeling down, depressed, or hopeless";
        document.getElementById("q3").innerHTML =
            "Difficulty falling asleep; waking up in the middle of the night or conversely sleeping too much";
        document.getElementById("q4").innerHTML =
            "Feeling tired or low on energy";
        document.getElementById("q5").innerHTML =
            "Extremely poor appetite or eating too much";
        document.getElementById("q6").innerHTML =
            "Dislike yourself─feeling that you have not done well, are disappointed in yourself, or have failed your family’s expectations";
        document.getElementById("q7").innerHTML =
            "Difficulty concentrating on tasks such as reading a newspaper or watching TV";
        //add q8 into form
        // find "tableContent"
        let tableContent = document.getElementById("tableContent");

        // establish tr
        let trElement = document.createElement("tr");
        trElement.setAttribute("id", "q8");

        // establish th
        let thElement = document.createElement("th");
        thElement.setAttribute("scope", "row");

        thElement.textContent =
            "Others report that you move or speak slowly; or, conversely, that you move more than usual—fidgeting and being unable to stop.";
        // add th into  tr
        trElement.appendChild(thElement);

        // add no.1 radio
        var tdElement1 = document.createElement("td");
        var inputElement1 = document.createElement("input");
        inputElement1.setAttribute("type", "radio");
        inputElement1.setAttribute("name", "q8");
        inputElement1.setAttribute("value", "0");
        inputElement1.setAttribute("required", "true");
        tdElement1.appendChild(inputElement1);
        trElement.appendChild(tdElement1);

        // add no.2 radio
        var tdElement2 = document.createElement("td");
        var inputElement2 = document.createElement("input");
        inputElement2.setAttribute("type", "radio");
        inputElement2.setAttribute("name", "q8");
        inputElement2.setAttribute("value", "3");
        inputElement2.setAttribute("required", "true");
        tdElement2.appendChild(inputElement2);
        trElement.appendChild(tdElement2);

        // add no.3 radio
        var tdElement3 = document.createElement("td");
        var inputElement3 = document.createElement("input");
        inputElement3.setAttribute("type", "radio");
        inputElement3.setAttribute("name", "q8");
        inputElement3.setAttribute("value", "5");
        inputElement3.setAttribute("required", "true");
        tdElement3.appendChild(inputElement3);
        trElement.appendChild(tdElement3);

        // add no.4 radio
        var tdElement4 = document.createElement("td");
        var inputElement4 = document.createElement("input");
        inputElement4.setAttribute("type", "radio");
        inputElement4.setAttribute("name", "q8");
        inputElement4.setAttribute("value", "7");
        inputElement4.setAttribute("required", "true");
        tdElement4.appendChild(inputElement4);
        trElement.appendChild(tdElement4);

        // add tr into id = tableContent
        tableContent.appendChild(trElement);

        //add q9 into form

        // establish tr
        let trElement9 = document.createElement("tr");
        trElement9.setAttribute("id", "q9");

        // establish th
        let thElement9 = document.createElement("th");
        thElement9.setAttribute("scope", "row");

        thElement9.textContent =
            "Thinking that it would be best to die or harm yourself";
        // add th into  tr
        trElement9.appendChild(thElement9);

        // add no.1 radio
        var tdElement91 = document.createElement("td");
        var inputElement91 = document.createElement("input");
        inputElement91.setAttribute("type", "radio");
        inputElement91.setAttribute("name", "q9");
        inputElement91.setAttribute("value", "0");
        inputElement91.setAttribute("required", "true");
        tdElement91.appendChild(inputElement91);
        trElement9.appendChild(tdElement91);

        // add no.2 radio
        var tdElement92 = document.createElement("td");
        var inputElement92 = document.createElement("input");
        inputElement92.setAttribute("type", "radio");
        inputElement92.setAttribute("name", "q9");
        inputElement92.setAttribute("value", "3");
        inputElement92.setAttribute("required", "true");
        tdElement92.appendChild(inputElement92);
        trElement9.appendChild(tdElement92);

        // add no.3 radio
        var tdElement93 = document.createElement("td");
        var inputElement93 = document.createElement("input");
        inputElement93.setAttribute("type", "radio");
        inputElement93.setAttribute("name", "q9");
        inputElement93.setAttribute("value", "5");
        inputElement93.setAttribute("required", "true");
        tdElement93.appendChild(inputElement93);
        trElement9.appendChild(tdElement93);

        // add no.4 radio
        var tdElement94 = document.createElement("td");
        var inputElement94 = document.createElement("input");
        inputElement94.setAttribute("type", "radio");
        inputElement94.setAttribute("name", "q9");
        inputElement94.setAttribute("value", "7");
        inputElement94.setAttribute("required", "true");
        tdElement94.appendChild(inputElement94);
        trElement9.appendChild(tdElement94);

        // add tr into id = tableContent
        tableContent.appendChild(trElement9);
    }
}
