<?php
/*
for more information: see languages.txt in the lang folder.
*/
$EmailNotificationTemplateDescription = "You can customize the email sent to users when they finished the exercise. You can use tags like these:

1. {{ student.username }}
2. {{ student.firstname }}
3. {{ student.lastname }}
4. {{ student.official_code }}
5. {{ exercise.title }}
6. {{ exercise.start_time }}
7. {{ exercise.end_time }}
8. {{ course.title }}
9. {{ course.code }}";
$EmailNotificationTemplate = "Email notification template";
$ExerciseEndButtonDisconnect = "Logout";
$ExerciseEndButtonExerciseHome = "Exercise list.";
$ExerciseEndButtonCourseHome = "Course home";
$ExerciseEndButton = "Exercise end button";
$HideQuestionTitle = "Hide question title";
$QuestionSelection = "Question selection type";
$OrderedCategoriesByParentWithQuestionsRandom = "Ordered categories by parent with random questions";
$OrderedCategoriesByParentWithQuestionsOrdered = "Ordered categories by parent with questions ordered";
$RandomCategoriesWithRandomQuestionsNoQuestionGrouped = "Random categories with random questions (questions not grouped)";
$RandomCategoriesWithQuestionsOrderedNoQuestionGrouped = "Random categories with questions ordered (questions not grouped)";
$RandomCategoriesWithRandomQuestions = "Random categories with random questions";
$OrderedCategoriesAlphabeticallyWithRandomQuestions = "Ordered categories alphabetically with random questions";
$RandomCategoriesWithQuestionsOrdered = "Random categories with questions ordered";
$OrderedCategoriesAlphabeticallyWithQuestionsOrdered = "Ordered categories alphabetically with questions ordered";
$UsingCategories = "Using categories";
$OrderedByUser = "Ordered by user";
$ToReview = "To be reviewed";
$Unanswered = "Unanswered";
$Answered = "Answered";
$CurrentQuestion = "Current question";
$MediaQuestions = "Shareable enunciates";
$AddedToLPCannotBeAccessed = "This exercise has been included in a learning path, so it cannot be accessed by students directly from here. If you want to put the same exercise available through the exercises tool, please make a copy of the current exercise using the copy icon.";
$langExercice = "Test";
$langActivate = "Show";
$langDeactivate = "Hide";
$langNoEx = "There is no test for the moment";
$langNewEx = "Create a new test";
$langQuestion = "Question";
$langQuestions = "Questions";
$langAnswers = "Answers";
$langTrue = "True";
$langAnswer = "Answer";
$langResult = "Result";
$langNoResult = "There is no result yet";
$langYourResults = "Your results";
$langStudentResults = "Score";
$langExerciseType = "Sequential";
$langExerciseName = "Test name";
$langExerciseDescription = "Give a context to the test";
$langSimpleExercise = "All questions on one page";
$langSequentialExercise = "One question by page";
$langRandomQuestions = "Random questions";
$langGiveExerciseName = "Please give the test name";
$langSound = "Audio or video file";
$langDeleteSound = "Delete the audio or video file";
$langNoAnswer = "There is no answer for the moment";
$langGoBackToQuestionPool = "Go back to the question pool";
$langGoBackToQuestionList = "Go back to the questions list";
$langQuestionAnswers = "Answers to the question";
$langUsedInSeveralExercises = "Warning ! This question and its answers are used in several tests. Would you like to Edit them";
$langModifyInAllExercises = "in all tests";
$langModifyInThisExercise = "only in the current test";
$langAnswerType = "Answer type";
$langMultipleSelect = "Multiple answers";
$langFillBlanks = "Fill blanks or form";
$langMatching = "Matching";
$langAddPicture = "Add a picture";
$langReplacePicture = "Replace the picture";
$langDeletePicture = "Delete picture";
$langQuestionDescription = "Enrich question";
$langGiveQuestion = "Please type the question";
$langWeightingForEachBlank = "Please enter a score for each blank";
$langUseTagForBlank = "use square brackets [...] to define one or more blanks";
$langQuestionWeighting = "Score";
$langMoreAnswers = "+answ";
$langLessAnswers = "-answ";
$langMoreElements = "+elem";
$langLessElements = "-elem";
$langTypeTextBelow = "Please type your text below";
$langDefaultTextInBlanks = "<table cellspacing=\"0\" cellpadding=\"10\" border=\"1\" width=\"720\" style=\"\" height:=\"\">    <tbody>        <tr>            <td colspan=\"2\">            <h3>Example fill the form activity : calculate the Body Mass Index</h3>            </td>        </tr>        <tr>            <td style=\"text-align: right;\"><strong>Age</strong></td>            <td width=\"75%\" style=\"\">[25] years old</td>        </tr>        <tr>            <td style=\"text-align: right;\"><strong>Sex</strong></td>            <td style=\"\" text-align:=\"\">[M] (M or F)</td>        </tr>        <tr>            <td style=\"text-align: right;\"><strong>Weight</strong></td>            <td style=\"\" text-align:=\"\">95 Kg</td>        </tr>        <tr>            <td style=\"vertical-align: top; text-align: right;\"><strong>Height</strong></td>            <td style=\"vertical-align: top;\">1.81 m</td>        </tr>        <tr>            <td style=\"vertical-align: top; text-align: right;\"><strong>Body Mass Index</strong></td>            <td style=\"vertical-align: top;\">[29] BMI =Weight/Size<sup>2</sup> (Cf.<a href=\"http://en.wikipedia.org/wiki/Body_mass_index\" onclick=\"window.open(this.href,'','resizable=yes,location=yes,menubar=no,scrollbars=yes,status=yes,toolbar=no,fullscreen=no,dependent=no,width=800,height=600,left=40,top=40,status'); return false\"> Wikipedia article</a>)</td>        </tr>    </tbody></table>";
$langDefaultMatchingOptA = "Note down the address";
$langDefaultMatchingOptB = "Contact the emergency services";
$langDefaultMakeCorrespond1 = "First step";
$langDefaultMakeCorrespond2 = "Second step";
$langDefineOptions = "Please define the options";
$langMakeCorrespond = "Match them";
$langFillLists = "Please fill the two lists below";
$langGiveText = "Please type the text";
$langDefineBlanks = "Please define at least one blank with square brackets [...]";
$langGiveAnswers = "Please type the question's answers";
$langChooseGoodAnswer = "Please check the correct answer";
$langChooseGoodAnswers = "Please check one or more correct answers";
$langQuestionList = "Question list of the test";
$langMoveUp = "Move up";
$langMoveDown = "Move down";
$langGetExistingQuestion = "Recycle existing questions";
$langFinishTest = "Correct test";
$langQuestionPool = "Recycle existing questions";
$langOrphanQuestions = "Orphan questions";
$langNoQuestion = "Questions list (there is no question so far).";
$langAllExercises = "All tests";
$langFilter = "Filter";
$langGoBackToEx = "Go back to the test";
$langReuse = "Re-use in current test";
$langExerciseManagement = "Tests management";
$langQuestionManagement = "Question / Answer management";
$langQuestionNotFound = "Question not found";
$langExerciseNotFound = "Test not found or not visible";
$langAlreadyAnswered = "You already answered the question";
$langElementList = "Elements list";
$langScore = "Score";
$langCorrespondsTo = "Corresponds to";
$langExpectedChoice = "Expected choice";
$langYourTotalScore = "Score for the test";
$ReachedMaxAttemptsAdmin = "You have reached the maximum number of attempts for this test. Being a trainer, you can go on practicing but your Results will not be reported.";
$langExerciseAdded = "Exercise added";
$Build = "Build";
$langEvalSet = "Assesment settings";
$langActive = "active";
$langInactive = "inactive";
$langQuestCreate = "Create questions";
$langExRecord = "your test has been saved";
$langBackModif = "back to the edit page of questions";
$langDoEx = "make test";
$langDefScor = "Describe assessment settings";
$langCreateModif = "Create/Edit questions";
$langSub = "subtitle";
$langMyAnswer = "My answer";
$langMorA = "+ answer";
$langLesA = "- answer";
$langRecEx = "Save test";
$langRecQu = "Add question to test";
$langRecAns = "Save Answers";
$langIntroduction = "Introduction";
$langTitleAssistant = "Assistant for the creation of tests";
$langQuesList = "questionlist";
$langSaveEx = "save tests";
$langFinish = "Quit test";
$langCancel = "Cancel";
$langQImage = "Question with an image";
$langAddQ = "Add a question";
$langDoAnEx = "Do an test";
$langGenerator = "Test list";
$langChoice = "Your choice";
$langCorrect = "Correct";
$langPossAnsw = "Number of good answers for one question";
$langStudAnsw = "number of errors by the learner";
$langDetermine = "Determine";
$langNonNumber = "a non numeric value";
$langReplaced = "Replaced";
$langSuperior = "a value larger than 20";
$langRep20 = "Replace 20";
$langDefault = "Default Values *";
$langDefComment = "previous values will be replaced by clicking the \"default values\" button";
$langScoreGet = "black numbers = score";
$langShowScor = "Show score to learner:";
$langStep1 = "Step 1";
$langStep2 = "Step 2";
$langTake = "take";
$langAmong = "among";
$langImportHotPotatoesQuiz = "Import Hotpotatoes";
$langHotPotatoesTests = "Import Hotpotatoes tests";
$langDownloadFile = "Upload file";
$langDownloadImg = "Upload Image file to the server";
$langDownloadEnd = "The upload is finished";
$langNoSpace = "The upload has failed. Either you have exceeded your maximum quota, or there is not enough disk space.";
$langZipNoPhp = "The zip file can not contain .PHP files";
$langNoImg = "Test whithout Images";
$langImgNote_st = "<br> You still have to upload";
$langImgNote_en = " image(s) :";
$langDocDeleted = "Document deleted";
$langViMod = "Visibility modified";
$langNameNotEqual = "is not the valid file !";
$langIndice = "Index";
$langIndices = "Indexes";
$langDateExo = "Date";
$langShowQuestion = "Show Question";
$langUnknownExercise = "Unknown Test";
$langReuseQuestion = "Reuse the question";
$langCreateExercise = "Create test";
$langCreateQuestion = "Create a question";
$langCreateAnswers = "Create answers";
$langModifyExercise = "Edit test name and settings";
$langModifyAnswers = "Edit answers";
$langForExercise = "for the test";
$langUseExistantQuestion = "Use an existing question";
$FreeAnswer = "Open question";
$notCorrectedYet = "This answer has not yet been corrected. Meanwhile, your score for this question is set to 0, affecting the total score.";
$adminHP = "Hot Potatoes Admin";
$NewQu = "New question";
$NoImage = "Please select an image";
$langAnswerHotspot = "Description and scoring are required for each hotspot - feedback is optional";
$langMinHotspot = "You have to create one (1) hotspot at least.";
$langMaxHotspot = "The maximum hotspots you can create is twelve (12).";
$langHotspotError = "Please supply a description and weighing for each hotspot.";
$langMoreHotspots = "Add hotspot";
$langLessHotspots = "Remove hotspot";
$langHotspotZones = "Image zones";
$langNextQuestion = "Next question";
$langCorrectAnswer = "Correct answer";
$langHotspotHit = "Your answer was";
$langOnlyJPG = "For hotspots you can only use JPG (or JPEG) images";
$langFinishThisTest = "Show correct answers to each question and the score for the test";
$langAllQuestions = "All questions";
$langModifyTitleDescription = "Edit title and description";
$langModifyHotspots = "Edit answers/hotspots";
$langHotspotNotDrawn = "You haven't drawn all your hotspots yet";
$langHotspotWeightingError = "You must give a positive score for each hotspots";
$langHotspotValidateError1 = "You should answer completely to the question (";
$langHotspotValidateError2 = " click(s) required on the image) before seeing the results";
$langHotspotRequired = "Description and scoring are required for each hotspot. Feedback is optional.";
$langHotspotChoose = "To create a hotspot: select a shape next to the colour, and draw the hotspot. To move a hotspot, select the colour, click another spot in the image, and draw the hotspot. To add a hotspot: click the Add hotspot button. To close a polygon shape: right click and select Close polygon.";
$Fault = "Incorrect";
$HotSpot = "Image zones";
$ClickNumber = "Click number";
$HotspotGiveAnswers = "Please give an answer";
$Addlimits = "Add limits";
$AreYouSure = "Are you sure";
$StudentScore = "Learner score";
$backtoTesthome = "Back to test home";
$Feedback = "Feedback";
$MarkIsUpdated = "The grade has been updated";
$MarkInserted = "Grade inserted";
$PleaseGiveAMark = "Please give a grade";
$EditCommentsAndMarks = "Edit individual feedback and grade the open question";
$AddComments = "Add individual feedback";
$Number = "N°";
$Weighting = "Score";
$ChooseQuestionType = "To create a new question, choose the type above";
$MatchesTo = "Matches To";
$CorrectTest = "Correct test";
$ViewTest = "View";
$State = "Status";
$NotAttempted = "Not attempted";
$AddElem = "Add element";
$DelElem = "Remove element";
$PlusAnswer = "Add answer option";
$LessAnswer = "Remove answer option";
$YourScore = "Your score";
$Attempted = "Attempted";
$AssignMarks = "Assign a grade";
$Results = "Results and feedback";
$ExerciseStored = "Proceed by clicking on a question type, then enter the appropriate information.";
$ChooseAtLeastOneCheckbox = "Choose at least one good answer";
$ExerciseEdited = "Test name and settings have been saved.";
$ExerciseDeleted = "The test has been deleted";
$ClickToCommentAndGiveFeedback = "Click the following link to check the answer and give feedback";
$OpenQuestionsAttempted = "A learner has answered an open question";
$AttemptDetails = "Attempt details";
$TestAttempted = "Test attempted";
$StudentName = "Learner name";
$StudentEmail = "Learner email";
$OpenQuestionsAttemptedAre = "Open question attempted is";
$CourseName = "Course name";
$UploadJpgPicture = "Upload image (jpg, png or gif) to apply hotspots.";
$HotspotDescription = "Now click on : (...)";
$ExamSheetVCC = "Examsheet viewed/corrected/commented by the trainer";
$AttemptVCC = "Your following attempt has been viewed/commented/corrected by the trainer";
$ClickLinkToViewComment = "Click the link below to access  your account and view your commented Examsheet.";
$Regards = "Regards";
$AttemptVCCLong = "You attempt for the test %s has been viewed/commented/corrected by the trainer. Click the link below to access  your account and view your Examsheet.";
$DearStudentEmailIntroduction = "Dear learner,";
$ExerciseFinished = "Test Finished";
$ResultsEnabled = "Results enabled for learners";
$ResultsDisabled = "Results disabled for learners";
$ExportWithUserFields = "Include profiling";
$ExportWithoutUserFields = "Exclude profiling";
$DisableResults = "Do not show results";
$EnableResults = "Show results to learners";
$ValidateAnswer = "Validate answers";
$FillInBlankSwitchable = "Allow answers order switches";
$ReachedMaxAttempts = "You cannot take test <b>%s</b> because you have already reached the maximum of %s attempts.";
$AdvancedParameters = "Advanced settings";
$RandomQuestionsToDisplay = "Number of random questions to display";
$RandomQuestionsHelp = "To randomize all questions choose 10. To disable randomization, choose \"Do not randomize\".";
$ExerciseAttempts = "Max number of attempts";
$DoNotRandomize = "Do not randomize";
$Infinite = "Infinite";
$BackToExercisesList = "Back to Tests tool";
$ViewScoreChangeHistory = "View score change history";
$NoStartDate = "No start date";
$NoLogOfDuration = "No log of duration";
$EnableTimeLimits = "Impose calendar limit";
$ExeStartTime = "Start date";
$ExeEndTime = "End date";
$Value = "Value";
$DeleteAttempt = "Delete attempt?";
$WithoutComment = "Without comment";
$QuantityQuestions = "Questions";
$FilterExercices = "Filter tests";
$FilterByNotRevised = "Only unqualified";
$FilterByRevised = "Only qualified";
$Duration = "Duration";
$ReachedTimeLimit = "Time limit reached";
$TryAgain = "Try again";
$SeeTheory = "Theory link";
$EndActivity = "End of activity";
$NoFeedback = "Exam (no feedback)";
$DirectFeedback = "Self-evaluation (immediate feedback)";
$FeedbackType = "Feedback";
$Scenario = "Scenario";
$VisitUrl = "Visit this link";
$ExitTest = "Exit test";
$DurationFormat = "%1 seconds";
$Difficulty = "Difficulty";
$NewScore = "New score";
$NewComment = "New comment";
$ExerciseNoStartedYet = "The test did not start yet";
$ExerciseNoStartedAdmin = "The trainer did not allow the test to start yet";
$SelectTargetLP = "Select target training";
$SelectTargetQuestion = "Select target question";
$DirectFeedbackCantModifyTypeQuestion = "The test type cannot be modified since it was set to self evaluation. Self evaluation gives you the possibility to give direct feedback to the user, but this is not compatible with all question types and, so this type quiz cannot be changed afterward.";
$CantShowResults = "Not available";
$CantViewResults = "Can't view results";
$ShowCorrectedOnly = "With individual feedback";
$ShowUnCorrectedOnly = "Uncorrected results";
$HideResultsToStudents = "Hide results";
$ShowResultsToStudents = "Show score to learner";
$ProcedToQuestions = "Proceed to questions";
$AddQuestionToExercise = "Add this question to the test";
$PresentationQuestions = "Display";
$UniqueAnswer = "Multiple choice";
$MultipleAnswer = "Multiple answer";
$ReachedOneAttempt = "You can not take this test because you have already reached one attempt";
$QuestionsPerPage = "Questions per page";
$QuestionsPerPageOne = "One";
$QuestionsPerPageAll = "All";
$EditIndividualComment = "Edit individual feedback";
$ThankYouForPassingTheTest = "Thank you for passing the test";
$ExerciseAtTheEndOfTheTest = "At end of test";
$EnrichQuestion = "Enrich question";
$langDefaultUniqueQuestion = "Select the good reasoning";
$langDefaultUniqueAnswer1 = "A then B then C";
$langDefaultUniqueComment1 = "Milk is the basis of many dairy products such as butter, cheese, yogurt, among other";
$langDefaultUniqueAnswer2 = "A then C then B";
$langDefaultUniqueComment2 = "Oats are one of the most comprehensive grain. By their energy and nutritional qualities has been the basis of feeding people";
$langDefaultMultipleQuestion = "The marasmus is a consequence of";
$langDefaultMultipleAnswer1 = "Lack of Calcium";
$langDefaultMultipleComment1 = "The calcium acts as a ...";
$langDefaultMultipleAnswer2 = "Lack of Vitamin A";
$langDefaultMultipleComment2 = "The Vitamin A is responsible for...";
$langDefaultFillBlankQuestion = "Calculate the Body Mass Index";
$langDefaultMathingQuestion = "Order the operations";
$langDefaultOpenQuestion = "List what you consider the 10 top qualities of a good project manager?";
$langMoreHotspotsImage = "Add/edit hotspots on the image";
$ReachedTimeLimitAdmin = "Reached time limit admin";
$LastScoreTest = "Last score of a exercise";
$BackToResultList = "Back to result list";
$EditingScoreCauseProblemsToExercisesInLP = "If you edit a question score, please remember that this Exercise was added in a Course";
$SelectExercice = "Select exercise";
$YouHaveToSelectATest = "You have to select a test";
$HotspotDelineation = "Hotspot delineation";
$CreateQuestions = "Create questions";
$MoreOAR = "More areas at risk";
$LessOAR = "Less areas at risk";
$LearnerIsInformed = "This message, as well as the results table, will appear to the learner if he fails this step";
$MinOverlap = "Minimum overlap";
$MaxExcess = "Maximum excess";
$MaxMissing = "Maximum missing";
$IfNoError = "If no error";
$LearnerHasNoMistake = "The learner made no mistake";
$YourAnswer = "Your answer";
$YourDelineation = "Your delineation :";
$ResultIs = "Your result is :";
$Overlap = "Overlapping area";
$Missing = "Missing area";
$Excess = "Excessive area";
$Min = "Minimum";
$Max = "Maximum";
$Requirements = "Requirements";
$OARHit = "One (or more) area at risk has been hit";
$TooManyIterationsPleaseTryUsingMoreStraightforwardPolygons = "Too many iterations while calculating your answer. Please try drawing your delineation in a more straightforward manner";
$Thresholds = "Thresholds";
$Delineation = "Delineation";
$QuestionTypeDoesNotBelongToFeedbackTypeInExercise = "Question type does not belong to feedback type in exercise";
$XResultsCleaned = "%d results cleaned";
$AreYouSureToDeleteResults = "Are you sure to delete results";
$ExerciseCopied = "Exercise copied";
$AreYouSureToCopy = "Are you sure to copy";
$EditingExerciseCauseProblemsInLP = "Editing exercise cause problems in Learning Path";
$SessionIsReadOnly = "The session is read only";
$EnableTimerControl = "Enable time control";
$ExerciseTotalDurationInMinutes = "Total duration in minutes of the test";
$ToContinueUseMenu = "To continue this course, please use the side-menu.";
$RandomAnswers = "Shuffle answers";
$NotMarkActivity = "This activity cannot be graded";
$YouHaveToCreateAtLeastOneAnswer = "You have to create at least one answer";
$ExerciseAttempted = "A learner attempted an exercise";
$MultipleSelectCombination = "Exact Selection";
$MultipleAnswerCombination = "Exact answers combination";
$ExerciceExpiredTimeMessage = "The exercise time limit has expired";
$AllQuestionsMustHaveACategory = "All questions must have a category to use the random-by-category mode.";
$NoMedia = "Not linked to media";
$AttachToMedia = "Attach to media";
$ExamModeWithFinalScoreShowOnlyFinalScoreWithCategoriesIfAvailable = "Show only final score, with categories if available";
$Media = "Media";
$ForceEditingExerciseInLPWarning = "You are authorized to edit this exercise, although already used in the learning path. If you edit it, try to avoid changing the score and focus on editing content, not values nor categorization, to avoid affecting the results of previous users having taken this test.";
$CopyExercise = "Copy this exercise as a new one";
$CleanStudentResults = "Clear all learners results for this exercise";
$ImportQtiQuiz = "Import exercises Qti2";
$ReUseACopyInCurrentTest = "Re-use a copy inside the current test";
$Copy = "Copy";
$QuestionGlobalCategory = "Global category";
$CheckThatYouHaveEnoughQuestionsInYourCategories = "Make sure you have enough questions in your categories.";
$ScoreAverageFromAllAttempts = "Score average from all attempts";
$DefaultContent = "Generate default content";
$OralQuestionsAttemptedAreX = "The attempted oral questions are %s";
$OralQuestionsAttempted = "A learner has attempted one or more oral question";
$RelativeScore = "Relative score";
$AbsoluteScore = "Absolute score";
$EditQuestions = "Edit questions";
$ExerciseDescriptionLabel = "Description";
$ExerciseEditionNotAvailableInSession = "You can't edit this course exercise from inside a session";
$UniqueAnswerNoOption = "Unique answer with unknown";
$MultipleAnswerTrueFalse = "Multiple answer true/false/don't know";
$MultipleAnswerCombinationTrueFalse = "Combination true/false/don't-know";
$DontKnow = "Don't know";
$False = "False";
$DoubtScore = "Don't know";
$HotSpotDelineation = "Hotspot delineation";
$PropagateNegativeResults = "Propagate negative results between questions";
$InsertALinkToThisQuestionInTheExercise = "Use this question in the test as a link (not a copy)";
$OnlyShowScore = "Practice mode: Show score only, by category if at least one is used";
$ImportExcelQuiz = "Import quiz from Excel";
$DownloadExcelTemplate = "Download the Excel Template";
$ExerciseWillBeActivatedFromXToY = "Exercise will be activated from %s to %s";
$EnableStartTime = "Enable start time";
$EnableEndTime = "Enable end time";
$ExerciseAvailableFromX = "Exercise available from %s";
$ExerciseAvailableUntilX = "Exercise available until %s";
$TestLimitsAdded = "Tests limits added";
$AddLimits = "Add limits";
$Unlimited = "Unlimited";
$LimitedTime = "Limited time";
$LimitedAttempts = "Limited attempts";
$Times = "Times";
$Random = "Random";
$ExerciseTimerControlMinutes = "Enable exercise timer controller.";
$Numeric = "Numerical";
$Acceptable = "Acceptable";
$Hotspot = "Hotspot";
$ChangeTheVisibilityOfTheCurrentImage = "Change the visibility of the current image";
$Steps = "Steps";
$OriginalValue = "Original value";
$ChooseAnAnswer = "Choose an answer";
$ImportExercise = "Import exercise";
$MultipleChoiceMultipleAnswers = "Multiple choice, multiple answers";
$MultipleChoiceUniqueAnswer = "Multiple choice, unique answer";
$HotPotatoesFiles = "HotPotatoes files";
$HotPotatoes = "HotPotatoes";
$OAR = "Area to avoid";
$TotalScoreTooBig = "Total score is too big";
$InvalidQuestionType = "Invalid question type";
$ShowScoreAndRightAnswer = "Auto-evaluation mode: show score and expected answers";
$DoNotShowScoreNorRightAnswer = "Exam mode: Do not show score nor answers";
$LoadUsersExtraData = "Load users' extra data";
$StartTest = "Start test";
$SaveForNow = "Save and continue";
$QuestionsToReview = "Questions to be reviewed";
$QuestionWithNoAnswer = "Questions without answer";
$ValidateAnswers = "Validate answers";
$ReviewQuestions = "Review selected questions";
$YouTriedToResolveThisExerciseEarlier = "You have tried to resolve this exercise earlier";
$ThereAreNoQuestionsForThisExercise = "There are no questions for this exercise";
$ContinueTest = "Proceed with the test";
$XQuestionsWithTotalScoreY = "%d questions, for a total score (all questions) of %s.";
$QuestionLowerCase = "question";
$QuestionsLowerCase = "questions";
$Category = "Category";
$BackToTestList = "Back to test list";
$CategoryDescription = "Category description";
$BackToCategoryList = "Back to category list";
$AddCategoryNameAlreadyExists = "This category name already exists. Please use another name.";
$CannotDeleteCategory = "Can't delete category";
$CannotDeleteCategoryError = "Error: could not delete category";
$CannotEditCategory = "Could not edit category";
$ModifyCategory = "Modify category";
$ModifyCategoryError = "Could not update category";
$AllCategories = "All categories";
$AllGroups = "All groups";
$FilterByGroup = "Filter by group";
$CreateQuestionOutsideExercice = "Create question outside exercise";
$ChoiceQuestionType = "Choose question type";
$YesWithCategoriesSorted = "Yes, with categories ordered";
$YesWithCategoriesShuffled = "Yes, with categories shuffled";
$ManageAllQuestions = "Manage all questions";
$MustBeInATest = "Must be in a test";
$PleaseSelectSomeRandomQuestion = "Please select some random question";
$RemoveFromTest = "Remove from test";
$AddQuestionToTest = "Add question to test";
$QuestionByCategory = "Question by category";
$QuestionUpperCaseFirstLetter = "Question";
$QuestionCategory = "Questions category";
$AddACategory = "Add category";
$CategoryName = "Category name";
$AddTestCategory = "Add test category";
$AddCategoryDone = "Category added";
$NbCategory = "Nb categories";
$DeleteCategoryAreYouSure = "Are you sure you want to delete this category?";
$DeleteCategoryDone = "Category deleted";
$EditCategory = "Edit category";
$MofidfyCategoryDone = "Category updated";
$NoCategory = "No category";
$NotInAGroup = "Not in a group";
$DoFilter = "Filter";
$ByCategory = "By category";
$ResultsNotRevised = "Results not reviewed";
$ResultNotRevised = "Result not reviewed";
$NumberOfStudentsWhoTryTheExercise = "Number of learners who attempted the exercise";
$LowestScore = "Lowest score";
$HighestScore = "Highest score";
$MaximumScore = "Maximum score";
$NotRevised = "Not reviewed";
$PreviousQuestion = "Previous question";
$Options = "Options";
$RandomQuestionByCategory = "Random questions by category";
$QuestionDisplayCategoryName = "Display questions category";
$ReviewAnswers = "Review my answers";
$TextWhenFinished = "Text appearing at the end of the test";
$Validated = "Validated";
$NotValidated = "Not validated";
$Revised = "Revised";
$SelectAQuestionToReview = "Select a question to revise";
$ReviewQuestionLater = "Revise question later";
$NumberStudentWhoSelectedIt = "Number of learners who selected it";
$QuestionsAlreadyAnswered = "Questions already answered";
$StudentsWhoAreTakingTheExerciseRightNow = "Learners who're taking the exercise right now";
$ReportByQuestion = "Report by question";
$LiveResults = "Live results";
$RecordAnswer = "Record answer";
$UseTheMessageBelowToAddSomeComments = "Use the message below to add a comment";
$SendRecord = "Send record";
$DownloadLatestRecord = "Download record";
$OralExpression = "Oral expression";
$CongratulationsYouPassedTheTest = "Congratulations you passed the test!";
$YouDidNotReachTheMinimumScore = "You didn't reach the minimum score";
$EndTest = "End test";
$PassPercentage = "Pass percentage";
$NoCategorySelected = "No category selected";
$ExerciseAverage = "Exercise average";
$NoNegativeScore = "No negative score";
$GlobalMultipleAnswer = "Global multiple answer";
$AllQuestionsShort = "All";
$ProblemsRecordingUploadYourOwnAudioFile = "Problem recording? Upload your own audio file.";
?>