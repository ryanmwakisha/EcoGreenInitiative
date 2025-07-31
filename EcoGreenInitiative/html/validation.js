// js/validation.js

export const validateEmail = (email) => {
  const re = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
  return re.test(String(email).toLowerCase());
};

export const validateHumanName = (name) => {
  const re = /^[a-zA-Z\s'-]+$/;
  return re.test(String(name).trim());
};

// If you had validateDateRange and wanted to use it elsewhere:
export const validateDateRange = (dateString) => {
  if (!dateString) {
    return "Date cannot be empty.";
  }
  const inputDate = new Date(dateString);
  const today = new Date();
  today.setHours(0, 0, 0, 0);
  const earliestDate = new Date('2000-01-01');

  if (isNaN(inputDate.getTime())) {
    return "Invalid date format.";
  }
  if (inputDate > today) {
    return "Date cannot be in the future.";
  }
  if (inputDate < earliestDate) {
    return "Date is too far in the past.";
  }
  return null;
};