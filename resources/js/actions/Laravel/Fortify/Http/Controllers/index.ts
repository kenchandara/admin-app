import EmailVerificationPromptController from './EmailVerificationPromptController'
import VerifyEmailController from './VerifyEmailController'
import ConfirmablePasswordController from './ConfirmablePasswordController'
import ConfirmedPasswordStatusController from './ConfirmedPasswordStatusController'
const Controllers = {
    EmailVerificationPromptController: Object.assign(EmailVerificationPromptController, EmailVerificationPromptController),
VerifyEmailController: Object.assign(VerifyEmailController, VerifyEmailController),
ConfirmablePasswordController: Object.assign(ConfirmablePasswordController, ConfirmablePasswordController),
ConfirmedPasswordStatusController: Object.assign(ConfirmedPasswordStatusController, ConfirmedPasswordStatusController),
}

export default Controllers