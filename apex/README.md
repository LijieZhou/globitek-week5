# Project 5 - Encryption

Time spent: 10 hours spent in total

## User Stories

The following **required** functionality is completed:

1\. Symmetric Encrypt/Decrypt
  * [x]  Required: Repair the symmetric encrypt and decrypt code

2\. Encrypted Message 1
  * [x]  Required: Decrypt the government message: I heard about your current situation. Do you know who hacked APEX? -- The Chairman
  * [x]  Required: Encrypt a response and include in this README
  ijKL83C44tl7aK55WFqk0cd3YhVGZLhzxegUp2dgP4Wu1p2Z0OMnNhWsG9k0rDo5

3\. Generate Public-Private Keys
  * [x]  Required: Repair the key generator code
  * [x]  Required: Generate keys for "johnsteed" and add him to the Agent Directory

4\. Asymmetric Encrypt/Decrypt
  * [x]  Required: Repair the asymmetric encrypt and decrypt code

5\. Create/Verify Signature
  * [x]  Required: Repair the create and verify signature code

6\. Encrypted Message 2
  * [x]  Required: Decrypt the message: Cannot access APEX from this location. Send new agent codename and public key so I can contact. Encrypt response to protect codename. Include signature to verify identity and message integrity. -- sydneybristow
  * [x]  Required: Verify the message
  * [x]  Required: Include a response message in this README
  3g05aNftSYUwxqGLNlpAvWfY0ViXKbHIZpmJCs5hw2vEKrZoOwflZ0AwKFMyfFgBLNH3tGymYIpuviIC0/dSA577buS/vd6vP8jqiDpMSnF9rS3YwhNOesnMiSfGRxSHnW0hHkncUBCFy2VfwLnTZsBdG6B6h2PlHxsLZ+e1H5wAdBchm9iK7XGp9Cbk1zWmfqD+f2CrP2AkQ3NsBLZI/FUzrdZ/zH4NO/6Hh4dWACfDLf7uesOfNC7pR8kFnpk6vs6jTLnCuwp8Q/aSEX1JEHGuSuGsba2Ojr2HOAGe19F4I8BrbkJ99DOjTbpYZt1OAp7uqhgFYmzhT7eacYVRPA==

7\. Agent Messages
  * [x]  Required: Repair the dropbox code
  * [x]  Required: Repair the messages area
  * [x]  Required: Display encrypted messages for all agents
  * [x]  Required: Messages indicate whether the message signature is valid
  * [x]  Required: Your messages are automatically decrypted

8\. Identify the Double Agent
  * [x]  Required: Decrypt as many email messages as possible
  * [x]  Required: Identify the double agent: natasha

The following objectives are **optional**:

* Bonus Objective 1\.
  * [ ]  Track down the bugs in the code and fix them.

* Bonus Objective 2\.
  * [ ]  Write a report of your discoveries (longer than 300 characters).
  * [ ]  Compose a secure email for sending over an insecure network.
  * [ ]  Include the email with your encrypted report in this README.

* Bonus Objective 3\.
  * [ ]  Add a "Create/Verify Checksum" section to the Encryption Tools area.

* Advanced Objective 1\.
  * [ ]  Add support for other symmetric algorithms.

## Video Walkthrough

Here's a walkthrough of implemented user stories:

<img src='http://i.imgur.com/x1qpKXb.gif' title='symmetric' width='' alt='Video Walkthrough' />
<img src='http://i.imgur.com/LIwicrC.gif' title='key pair generator' width='' alt='Video Walkthrough' />
<img src='http://i.imgur.com/PVtuLeq.gif' title='asymmetric' width='' alt='Video Walkthrough' />
<img src='http://i.imgur.com/W2rtTe9.gif' title='signature' width='' alt='Video Walkthrough' />
<img src='http://i.imgur.com/rCJ647c.gif' title='dropbox' width='' alt='Video Walkthrough' />

GIF created with [LiceCap](http://www.cockos.com/licecap/).

## Notes

I had a very nasty bug for this assignment. For question 2, I used '0' for padding, instead of asterisk. Then, I just cannot get the government message decrypted. I was confused because I can decrypt the message I encrypted myself (so I think the encryption/decryption function should work). It took me a long while to figure out the government message is padded with asterisk, instead of '0'.

## License

    Copyright [2017] Lijie Zhou

    Licensed under the Apache License, Version 2.0 (the "License");
    you may not use this file except in compliance with the License.
    You may obtain a copy of the License at

        http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing, software
    distributed under the License is distributed on an "AS IS" BASIS,
    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
    See the License for the specific language governing permissions and
    limitations under the License.
