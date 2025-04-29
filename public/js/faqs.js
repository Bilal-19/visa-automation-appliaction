const allFAQ = [
    {
        id: 1,
        questionID: "questionOne",
        answerID: "answerOne",
        question: "What documents do I need to submit with my visa application form?",
        answer: "Typically, you need to provide a valid passport, recent photographs, proof of financial stability, travel itinerary, proof of accommodation, and any supporting documents like an invitation letter or employment proof, depending on the visa type."
    },
    {
        id: 2,
        questionID: "questionTwo",
        answerID: "answerTwo",
        question: "How do I fill out a visa application form correctly?",
        answer: "Carefully read all the instructions provided with the form. Provide accurate information, complete all sections, use only the required format (usually block letters), and avoid making any corrections or overwriting."
    },
    {
        id: 3,
        questionID: "questionThree",
        answerID: "answerThree",
        question: "What should I do if I make a mistake on the visa application form?",
        answer: "If the form is online, you may correct the information before submission. For paper forms, fill out a new form or check with the embassy or consulate for guidance on making corrections."
    },
    {
        id: 4,
        questionID: "questionFour",
        answerID: "answerFour",
        question: "Do I need to complete a separate application form for each family member?",
        answer: "Yes, generally, each family member, including children, must complete a separate visa application form unless otherwise specified by the embassy or consulate."
    },
    {
        id: 5,
        questionID: "questionFive",
        answerID: "answerFive",
        question: "How long does it take to process a visa application?",
        answer: "Processing times vary by country, visa type, and the applicant's circumstances, typically ranging from a few days to several weeks or even months."
    },
    {
        id: 6,
        questionID: "questionSix",
        answerID: "answerSix",
        question: "What happens if my visa application is denied?",
        answer: "You will receive a notification explaining the reason for denial. You may be able to appeal the decision, apply again after addressing the issues, or seek advice from an immigration lawyer."
    },
    {
        id: 7,
        questionID: "questionSeven",
        answerID: "answerSeven",
        question: "Can I apply for a visa online?",
        answer: "Many countries offer online visa applications through their official government or consulate websites. Check the specific country's visa application process to confirm."
    },
    {
        id: 8,
        questionID: "questionEight",
        answerID: "answerEight",
        question: "How do I know which visa type to apply for?",
        answer: "The type of visa you need depends on the purpose of your visit (e.g., tourism, work, study, transit). Review the visa options on the official website of the embassy or consulate of the country you plan to visit."
    }
]


const faqEl = document.getElementById("faqs")

allFAQ.map((val, key) => {
    faqEl.innerHTML +=
        `
        <div class="w-3/4 mx-auto my-3 p-5 rounded">
            <h5 class="text-xl font-medium mb-2 border-b cursor-pointer">${val.id}. ${val.question}</h5>
            <p class="text-sm font-light">${val.answer}</p>
        </div>
    `
})
